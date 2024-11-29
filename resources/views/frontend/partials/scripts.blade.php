<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="{{asset('assets')}}/js/custom.js"></script>
<script src="{{asset('assets')}}/js/owl.js"></script>
<script src="{{asset('assets')}}/js/slick.js"></script>
<script src="{{asset('assets')}}/js/isotope.js"></script>
<script src="{{asset('assets')}}/js/accordions.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>
<script>
    function copyText() {
        // Select the text element
        const text = document.getElementById("textToCopy").innerText;

        // Copy the text to the clipboard
        navigator.clipboard.writeText(text).then(() => {
            alert("Text copied to clipboard!");
        }).catch(err => {
            console.error("Failed to copy text: ", err);
        });
    }
</script>
