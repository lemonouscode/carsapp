<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @include('components/meta')
</head>
<body class="bg-zinc-800 text-white pb-28 relative">
    

    @include('components/transpnavbar')

    @include('components/hero')
    


    <div class="myContainer grid grid-flow-col grid-rows-2 max-w-screen-xl gap-10 mx-auto justify-between my-20 p-5">
    @foreach ($cars as $car)
        

           @include('/components/cards')
       
    @endforeach
    </div>


    @include('/components/footer')
    
</body>
</html>