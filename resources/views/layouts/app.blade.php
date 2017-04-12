<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')   
  </head>

  <body>

    @include('includes.header')

    @yield('content')
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Bootstrap core JavaScript123
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::to('/') }}/tinymce/tinymce.min.js"></script>
  <script>
tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    width: 730,
    height: 200,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>
      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>  
    <script src="{{ URL::to('/') }}/js/main.js"></script>  
  </body>
</html>
