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
                   <h1 class ="mb-0 text-white">{{$note -> title}}</h1>
                </header>
            </div>
        </div>
    
         
 
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                <table class="table mb-4">
                    <tbody>
                        <tr>
                            <td><b>Created at: </b>{{$note->created_at->diffforHumans()}}</td>
                            <td><b>Updated at: </b>{{$note->updated_at->diffforHumans()}}</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="text-center">Content</h3>
                <p style="white-space: pre-wrap;">{{$note->content}}</p>
                <h3 class="text-center">Category</h3>
                <p class="text-center" style="white-space: pre-wrap;">{{$note->category_name}}</p>

                <div class="text-end">
                    <a href="{{ route('notes.edit',$note->id)}}" class = "btn btn-warning">Editar nota</a>
                
                    <form action="{{ route('notes.destroy', $note->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <input type="enter" value="Eliminar" class="btn btn-danger" onclick="return confirm('se elimina?')">
                    </form>    

                </div>
            </div>
        </div> 

    </div>
</body>
</html>