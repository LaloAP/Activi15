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
                <header class="bg-info py-3 text-center">
                    <h1 class ="mb-0 text-white">Edit categories</h1>
                </header>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
               
                <form action="{{route('categories.update',$category->id)}}" method="post">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                       <b> <label for="" class="form-label">Category Name</label></b>
                        <input type="text" name = "category_name" class="form-control" value="{{$category->category_name}}">
                    </div>

                    <div class="text-end">
                        <input type="submit" value="Editar la categoria" class="btn btn-success" >

                    </div>

                </form>
            </div>
        </div>

    </div>




</body>
</html>