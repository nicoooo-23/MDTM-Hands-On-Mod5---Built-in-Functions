<?php
//put all string here then alter them at bottom later
    $changeCase = "HOLY ANGEL UNIVERSITY";
    $countChars = "Nicole Rivera";
    $removeChars = "PHP Code";
    $otherString = "Hypertext_Preprocessor";
?>

<!-- included includes because instructions mentioned it -->
<?php include 'header.php'; ?>

<!-- main html body -->
<body>
    <h1>PHP Built-in Functions</h1>
    <!-- initial strings -->
    <h2>Original Strings</h2>
    <p>Change Case - "HOLY ANGEL UNIVERSITY"</p>
    <p>Counting Characters and Words - "Nicole Rivera"</p>
    <p>Remove and Replace - "PHP Code"</p>
    <p>Other - "Hypertext_Preprocessor"</p>

    <!-- main area for showcasing the functions -->
    <h2>Changing the Case of Characters</h2> <!-- change case, 3 only -->
    <table>
        <tr>
            <th>Lowercase</th>
            <td><?php echo strtolower($changeCase); ?></td>
        </tr>
        <tr>
            <th>Uppercase</th>
            <td><?php echo strtoupper($changeCase); ?></td>
        </tr>
        <tr>
            <th>Capitalize</th>
            <td><?php echo ucwords($changeCase); ?></td>
        </tr>
    </table>

    <h2>Counting Characters and Words</h2> <!-- count chars, 2 only -->
    <table>
        <tr>
            <th>Number of Characters</th>
            <td><?php echo strlen($countChars); ?></td>
        </tr>
        <tr>
            <th>Number of Words</th>
            <td><?php echo str_word_count($countChars); ?></td>
        </tr>
    </table>

    <h2>Removing and Replacing Characters</h2> <!-- remove, 6 -->
    <table>
        <tr>
            <th>Remove whitespaces from left</th>
            <td><?php echo ltrim($removeChars); ?></td>
        </tr>
        <tr>
            <th>Remove whitespaces from right</th>
            <td><?php echo rtrim($removeChars); ?></td>
        </tr>
        <tr>
            <th>Remove whitespace from left and right</th>
            <td><?php echo trim($removeChars); ?></td>
        </tr>
        <tr>
            <th>String replace</th>
            <td><?php echo str_replace("Code", "Functions", $removeChars); ?></td>
        </tr>
        <tr>
            <th>String ireplace</th>
            <td><?php echo str_ireplace("PHP", "Built-in", $removeChars); ?></td>
        </tr>
        <tr>
            <th>String Repeat</th>
            <td><?php echo str_repeat("PHP ", 3); ?></td>
        </tr>
    </table>

    <!-- there should be at least 9 here -->
    <h2>Other Built-in Functions</h2>
    <table>
        <tr>
            <th>Substring</th>
            <td><?php echo substr($otherString, 0, 9); ?></td>
        </tr>
        <tr>
            <th>String Length without Spaces</th>
            <td><?php echo strlen(trim($otherString)); ?></td>
        </tr>
        <tr>
            <th>Reverse String</th>
            <td><?php echo strrev($otherString); ?></td>
        </tr>
        <tr>
            <th>Last Position of "p"</th>
            <td><?php echo strrpos($otherString, "p"); ?></td>
        </tr>
        <tr>
            <th>Does the string contain "Hello"?</th>
            <td>
                <?php
                    $check = preg_match('/Hello/', $otherString);
                    echo ($check === 1) ? 'Yes' : 'No';
                ?>
            </td>
        </tr>
        <tr>
            <th>Split String When Match is Found</th>
            <td>
                <?php
                    $splitting = preg_split('/_/', $otherString);
                    foreach($splitting as $word){
                        echo $word;
                        echo "\n";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Replace Specified Characters with Alternative String</th>
            <td>
                <?php
                    $swapChar = preg_replace('/Hypertext/', '<b>Hypertext</b>', $otherString);
                    echo $swapChar;
                ?>
            </td>
        </tr>
        <tr>
            <th>Multibyte Lowercase</th>
            <td><?php echo mb_strtolower($otherString); ?></td>
        </tr>
        <tr>
            <th>Multibyte Uppercase</th>
            <td><?php echo mb_strtoupper($otherString); ?></td>
        </tr>
        <tr>
            <th>Multibyte Length</th>
            <td><?php echo mb_strlen($otherString); ?></td>
        </tr>

    </table>

<?php include 'footer.php'; ?>
</body>
</html>