<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 5</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-50 column-offset-25">
            <h2>Input Form</h2>
            <form action="view.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
                <br/>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                <br/><label></label>
                <button type="submit" name="submit">Save</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>