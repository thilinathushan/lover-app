<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Love You 🥰</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <livewire:valentine.display-gif />
                        <livewire:valentine.display-text />
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="mt-4 d-inline-flex justify-content-center align-items-center" x-data="{ show: true }" @hideYesNo.window="show = false">
                        <livewire:valentine.yes-btn />
                        <livewire:valentine.no-btn msg="No" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () =>{
            let screenSize = screen.width;
            console.log('screenSize:', screenSize);
            Livewire.dispatch('screenSize',  {ss: screenSize} )
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
