<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Manipulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            padding: 20px;
            background-color: yellow;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
         
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        .result {
            padding: 10px;
            background:pink;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Array Manipulation</h2>
        <form action="arraymani.php" method="post">
            <label>Enter Array (comma-separated):</label>
            <input type="text" name="array_input" required>
            
            <label>Choose Operation:</label>
            <select name="operation">
                <option value="sort_asc">Sort (Ascending)</option>
                <option value="sort_desc">Sort (Descending)</option>
                <option value="max">Find Maximum</option>
                <option value="min">Find Minimum</option>
                <option value="remove_duplicates">Remove Duplicates</option>
                <option value="reverse">Reverse Array</option>
                <option value="search">Search Element</option>
            </select>

            <label>Search Element (if needed):</label>
            <input type="text" name="search_value">

            <button type="submit" name="submit">Process</button>
        </form>

       
    </div>
</body>
</html>