<div id="content" class="row">
    <?php

    echo
        '<div class="col-12 med-col-2"><img id="empImage" alt="User Photo" src="images/' . $users[0]->user_avatar . '"></div>
			<div id="empDetails" class="col-12 med-col-10"> <span class="centerDetails"><span class="label">Name:</span> ' . $users[0]->user_lname . ', ' . $users[0]->user_fname . '<br>
			<span class="label">User ID:</span> ' . $users[0]->id . '<br>
			<span class="label">Username:</span> ' . $users[0]->user_username . '<br></span></div>'
    ;
    ?>