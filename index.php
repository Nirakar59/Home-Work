<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="head1">Mill's Data Entry</h1>
        <form action="server.php" method="post">
        <div id="ProductName">
                <label for="productName">Product Name</label>
                <select name="PName" id="productName">
                    <option value="Chamal">Chamal</option>
                    <option value="Gahu">Gahu</option>
                    <option value="Kodo">Kodo</option>
                    <option value="Satu">Satu</option>
                    <option value="Makai">Makai</option>
                    <option value="Dhan">Dhan</option>
                    <option value="Masala">Masala</option>
                    <option value="Besar">Besar</option>
                    <option value="Khursani">Khursani</option>
                    

                </select>
            </div>
            <div id="OutputType">
            <label for="Output">Output Type:</label>
                <select name="outputType" id="Output">
                    <option value="Chamal">Chamal</option>
                    <option value="Pitho">Pitho</option>
                    <option value="SelRoti">SelRoti</option>
                    <option value="Aanarsa">Aanarsa</option>
                    <option value="Falney">Falney</option>
                    <option value="DhanKuteko">DhanKuteko</option>
                </select>
            </div>
            <div id="Quantity">
                <label for="qty">Quantity</label>
                <input type="number" step="0.001" min="0" name="quantity" id="qty" placeholder="0.00">
            </div>
            <div id="Rate">
                <label for="rate">Rate</label>
                <input type="number" name="rate" id="rate">
            </div>
            <input type="submit" value="Submit">
            <button type="submit" name="clearData">Clear Data</button>
        </form>

        
    </div>
</body>
</html>