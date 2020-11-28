<?php 
require 'inc/header.php';
require 'inc/notauthorized.php';
?>

    <main>
        <div class="main-container">
            <div class="container-login-whole container-offer">
                <h1>Dodaj oferte</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="container-login">
                        <input type="text" name="title" placeholder="Tytuł">
                        <select name="condition">
                            <option value="Nie podano">wybierz stan</option>
                            <option value="jak nowy">jak nowy</option>
                            <option value="bardzo dobry">bardzo dobry</option>
                            <option value="dobry">dobry</option>
                            <option value="przeciętny">przeciętny</option>
                        </select>
                        <textarea name="description" cols="30" rows="5" placeholder="Opis"></textarea>
                        <div id="offer-buttons">
                        <input type="file" name="image">
                        <input type="number" name="price" min="1" step="any" placeholder="cena">
                        </div>
                        <input type="submit" name="offer-submit" value="Dodaj">
                    </div>
                    
                </form> 
                <?php 
                if (isset($_POST['offer-submit'])) {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $condition = $_POST['condition'];
                    $image = $_FILES['image'];
                    $price = $_POST['price'];
                    $uploader = $_SESSION['email'];

                    $object = new SubmitOffer();
                    $object->getOfferInfo($title, $description, $condition, $image, $price, $uploader);
                }
                ?>
            </div>
        </div>
    </main>
<?php require 'inc/footer.php'; ?>