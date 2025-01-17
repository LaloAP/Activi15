<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-danger py-3 text-center">
                    <h1 class ="mb-0 text-white">Edit note</h1>
                </header>
            </div>
        </div> 
    
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
               
                <form action="{{route('notes.update',$note->id)}}" method="post">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name = "title" class="form-control" value="{{$note->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Content</label>
                        <textarea name="content" id="" rows="10" class="form-control">{{$note->content}}</textarea>
                    </div>


                    <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>{{$note->category_name}}</option>
                        @forelse($categories as $category)
                        
                        <option value="{{$category -> id}}">{{$category -> category_name}}</option>
                        @empty
                        <option value="1">0 categorias</option>
                        @endforelse
                    </select>


                    <div class="text-end">
                        <input type="submit" value="Editar Nota" class="btn btn-success" >

                    </div>

                </form>
            </div>
        </div>

    </div>




</body>
</html>