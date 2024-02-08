<?php $title = "Ablout Us";

include 'header.php'; ?>

<h2>About Us</h2>

<script>

    //this is a comment 

document.write ("Hello World")

//triggering an alert box
window.alert ("This is an alert box")

</script>

<noscript>
    If Javascript is not enables this will be displayed so the user knowsthey need to enable it.
</noscript>


<script>
    //document.write but after loading the page

    function hello(){
        document.write("This is after the page has loaded")
    }

</script>
    <button onclick="document.write('This is something')"> Click Me </button>









<?php include 'footer.php'; ?>