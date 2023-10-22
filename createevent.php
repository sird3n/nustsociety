<form name="createevent" action="inc/createevent.inc.php" method="post" enctype="multipart/form-data">
    <div class="eventdata">
        <div class="image_input" id="image-input">
            <label for="image" class="imginp"></label>
            <input class="imginp" type="file" id="image" name="image" accept="image/*" required>
        </div>
        <div class="data">
            <div class="event_data">
                <input type="text" name="Title" id="Title" placeholder='Title' required>
                <input type="text" name="Description" id="Description" placeholder='Description' required>
                <input type="date" name="StartDate" id="StartDate" placeholder='Start Date' required>
                <input type="date" name="EndDate" id="EndDate" placeholder='End Date' required>
            </div>
            <input type="submit" value="Add Event">
        </div>
    </div>
</form>