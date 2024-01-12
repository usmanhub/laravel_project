<x-app-layout>
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert New Post</h1>
        <form method="POST">
            @csrf
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="title" class="form-label">Post Title:</label>
                <input type="text" name="title" class="form-control" id="title"
                    placeholder="Enter Post Title" autocomplete="off" >
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="body" class="form-label">Post Description:</label>
                <input type="text" name="body" class="form-control" id="body"
                    placeholder="Enter Post Description" autocomplete="off" >
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" class="btn btn-info mb-3 px-3" value="Post">
            </div>
        </form>
    </div>
</body>

</html>
</x-app-layout>
