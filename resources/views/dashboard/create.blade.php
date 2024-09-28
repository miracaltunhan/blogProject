@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Blog</h1>

        <!-- Form for creating a new blog -->
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" class="form-control" id="category-select" required>
                    <option value="">Select a category</option> <!-- Varsayılan seçenek -->
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="author_name">Author Name</label>
                <input type="text" name="author_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>

        <script>
            document.getElementById('category-select').addEventListener('change', function() {
                const categoryId = this.value;

                // Alt kategorileri temizle
                const subcategorySelect = document.getElementById('subcategory-select');
                subcategorySelect.innerHTML = '<option value="">Select a subcategory</option>'; // Varsayılan seçeneği ekle

                // Eğer üst kategori seçilmemişse çık
                if (!categoryId) {
                    return;
                }

                // AJAX isteği gönder
                fetch(`/subcategories/${categoryId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(subcategory => {
                            const option = document.createElement('option');
                            option.value = subcategory.id;
                            option.textContent = subcategory.name;
                            subcategorySelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Hata:', error));
            });
        </script>
    </div>
@endsection
