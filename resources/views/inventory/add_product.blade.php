<!DOCTYPE html>
<html>

<head>
    <title>Product Form</title>

    <!-- bootstrap update version link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- fontawewsome update version link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- start product-details -->

    

    <!-- end each product-details Modal -->


    <!-- Link of JS files -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{asset('/assets_topmost/js/custom.js')}}"></script>
    <script src="{{asset('/assets_topmost/js/custom1.js')}}"></script> -->



    <script>

        let parent = document.querySelector('.add_new');
        let plus = document.querySelector('.plus_btn');
        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-6 col-ld-6 col-xl-6  text-uppercase mb-3");

            let label = document.createElement('label');

            label.setAttribute("class", "mb-2");
            label.setAttribute("class", "me-2");
            label.setAttribute("for", "image");
            label.textContent = "Add Image:    ";


            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "image");
            input.setAttribute("name", "image[]");
            input.setAttribute("placeholder", "Add New: ");
            input.setAttribute("required", "");

            div.append(label);
            div.append(input);

            parent.append(div);
            console.log(parent);
        });
    </script>

    <script>
        // color customize input tag
        let color_text = document.querySelector('.color_text');
        let color_plus_btn = document.querySelector('.color_plus_btn');
        let enter_color_div = document.querySelector('.enter_color_div');
        let enter_color_div_input1 = document.querySelector('.enter_color_div_input');


        color_text.addEventListener('click', function() {
            let yes_contain = enter_color_div.classList.contains('d-none');

            if (yes_contain) {
                enter_color_div.classList.remove('d-none');
                enter_color_div_input1.classList.remove('d-none');
            } else {
                enter_color_div.classList.add('d-none');
                enter_color_div_input1.classList.add('d-none');
            }
        });
  


        let enter_color_div_input = document.querySelector('.enter_color_div_input');

        let color_btn = document.querySelector('.color_btn');
        console.log(color_btn);




        color_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('mb-2');
            input.setAttribute('id', 'color');
            input.classList.add('me-2');
            input.setAttribute('name', 'color[]');

            enter_color_div_input.append(input);

        });

        // size customize input tag

        let size_text = document.querySelector('.size_text');
        let size_plus_btn = document.querySelector('.size_plus_btn');
        let enter_size_div = document.querySelector('.enter_size_div');
        let enter_size_div_input1 = document.querySelector('.enter_size_div_input');

        size_text.addEventListener('click', function() {
            let yes1_contain = enter_size_div.classList.contains('d-none');
            let enter_size_div_input2 = document.querySelector('.enter_color_div_input');

            if (yes1_contain) {
                enter_size_div.classList.remove('d-none');
                enter_size_div_input1.classList.remove('d-none');
            } else {
                enter_size_div.classList.add('d-none');
                enter_size_div_input1.classList.add('d-none');
            }
        });



        let enter_size_div_input = document.querySelector('.enter_size_div_input');

        let size_btn = document.querySelector('.size_btn');
        console.log(size_btn);

        size_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('mb-2');
            input.setAttribute('id', 'size');
            input.classList.add('me-2');
            input.setAttribute('name', 'size[]');

            enter_size_div_input.append(input);

        });
    </script>


</body>

</html>