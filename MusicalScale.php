<!doctype html>

<html>
	<head>
		<title>Musical Scale</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Musical Scale</h2>
        <?php
            $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
            $outputString = "The notes of the musical scale are: ";
            foreach($musicalScale as $currentNote) {
                $outputString .= " " . $currentNote;
             }
            echo "<p>$outputString</p>";
        ?>
        <h2>Formatted Text</h2>
        <?php
            $displayVariable = 9.876;
            echo "<pre>\n";
            echo "Unformatted text line 1. \r\n";
            echo "Unformatted text line 2. \r\n";
            echo "\$displayVariable = $displayVariable";
            echo "</pre>\n";
        ?>
	</body>
</html>