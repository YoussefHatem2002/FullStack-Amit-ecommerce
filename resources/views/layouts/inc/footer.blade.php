<footer>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3 class="mb-3">SHOPS</h3>
                <ul>
                    <li><a href="#">New In</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>

                </ul>
            </div>
            <div class="col-3">
                <h3 class="mb-3">INFORMATION</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">New Collection</a></li>

                </ul>
            </div>
            <div class="col-3">
                <h3 class="mb-3">CUSTOMER SERVICE</h3>
                <ul>
                    <li><a href="#">Search Terms</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="#">Orders and Returns</a></li>

                </ul>
            </div>
            <div class="col-3">
                <h3 class="mb-3">NEWSLETTER</h3>
                <p>Sign Up for News Letter</p>
                <form>
                    <input type="email" name="email" placeholder="Type Your E-mail"><br>
                    <button class="mt-2 " type="submit">SUBSCRIBE</button>
                </form>
                <ul class="icons mt-2">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    function change(rowId, value){
        if(value != null && value >=1){
            document.getElementById(rowId).href='editCart/'+rowId+'?qty='+value;
        }
    }
</script>
</body>
</html>
