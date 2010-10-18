<?php // this would be generated from your backend to do whatever you needed to do. ?>
<form id="profileForm" action="view.php" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" value="Bob Smithypants" />
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" value="bob@bob.com" />
    </div>
    <div>
        <label for="phone">Phone: </label>
        <input type="telephone" name="phone" value="1234567890" />
    </div>
    <div>
        <label for="favcolor">Favorite Color: </label>
        <input type="text" name="favcolor" value="Orange" />
    </div>
    <div>
        <label for="favbook">Favorite Book: </label>
        <input type="text" name="favbook" value="Jurassic Park" />
    </div>
    <div>
        <label for="favmovie">Favorite Movie: </label>
        <input type="text" name="favmovie" value="Fight Club" />
    </div>
    <div>
        <input type="button" id="saveProfileForm" value="Save" />
        <input type="button" id="cancel" value="Cancel" />
    </div>
</form>