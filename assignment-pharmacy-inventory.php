<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$medicines = [
    ["code" => "MED001", "name" => "Panadol", "category" => "Painkiller", "price" => 12.50, "stock" => 150, "expiry_months" => 18],
    ["code" => "MED002", "name" => "Amoxicillin", "category" => "Antibiotic", "price" => 25.80, "stock" => 75, "expiry_months" => 24],
    ["code" => "MED003", "name" => "Loratadine", "category" => "Antihistamine", "price" => 18.90, "stock" => 5, "expiry_months" => 36],
    ["code" => "MED004", "name" => "Omeprazole", "category" => "Antacid", "price" => 32.40, "stock" => 90, "expiry_months" => 12],
    ["code" => "MED005", "name" => "Metformin", "category" => "Diabetes", "price" => 45.60, "stock" => 200, "expiry_months" => 30],
    ["code" => "MED006", "name" => "Aspirin", "category" => "Painkiller", "price" => 8.75, "stock" => 0, "expiry_months" => 24],
    ["code" => "MED007", "name" => "Simvastatin", "category" => "Cholesterol", "price" => 38.20, "stock" => 45, "expiry_months" => 6]
];
?>

    <table class="medicine-table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price (RM)</th>
                <th>Stock</th>
                <th>Expiry</th>
                <th id="stock-level">Stock Level</th>
                <th>Expiry Lifetime</th>
                <th>Category Instruction</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicines as $medicine): ?>
            <tr>
                <td><?php echo $medicine['code']; ?></td>
                <td><?php echo $medicine['name']; ?></td>
                <td><?php echo $medicine['category']; ?></td>
                <td><?php echo $medicine['price']; ?></td>
                <td><?php echo $medicine['stock']; ?></td>
                <td><?php echo $medicine['expiry_months']; ?></td>



                <!-- EXERCISE 3 -->

                <td>
                    <?php
                    if ($medicine['stock'] > 100) {
                        echo "High Stock";
                    } elseif ($medicine['stock'] >= 50 && $medicine['stock'] <= 100) {
                        echo "Medium Stock";
                    } elseif ($medicine['stock'] >= 10 && $medicine['stock'] < 50) {
                        echo "Low Stock";
                    } elseif ($medicine['stock'] < 10 && $medicine['stock'] > 0) {
                        echo "Critical Stock";
                    } else {
                        echo "Out of Stock";
                    }
                    ?>

                </td>

                <!-- EXERCISE 4 -->

                <!-- <td>
                     <?php
                    $current_date = new DateTime();
                    $expiry_date = (clone $current_date)->modify("+{$medicine['expiry_months']} months");
                    echo $expiry_date->format("Y-m-d");
                    ?> 
                </td> -->
                <td><?php
                    if ($medicine['expiry_months'] > 24) {
                        echo "Long Term Storage";
                    } elseif ($medicine['expiry_months'] == 12) {
                        echo "SPECIAL HANDLING NEEDED";
                    } elseif ($medicine['expiry_months'] >= 12 && $medicine['expiry_months'] <= 24) {
                        echo "Medium Term Storage";
                    } elseif ($medicine['expiry_months'] >= 6 && $medicine['expiry_months'] < 12) {
                        echo "Short Term Storage";
                    } elseif ($medicine['expiry_months'] < 6) {
                        echo "Expires Soon - Priority Sale";
                    }  else {
                        echo "Check Expiry";
                    } ?>
                </td>

                <!-- EXERCISE 5 -->

                <td>
                    <?php
                    switch($medicine['category']) {
                        case 'Painkiller':
                            echo "Store at room temperature";
                            break;
                        case 'Antibiotics':
                            echo "Refrigerate after opening";
                            break;
                        case 'Antihistamine':
                            echo "Keep away from moisture";
                            break;
                        case 'Antacid':
                            echo "Store in cool, dry place";
                            break;
                        case 'Diabetes':
                            echo "Monitor blood sugar levels";
                            break;
                        case 'Cholesterol':
                            echo "Take with evening meal";
                            break;
                        default:
                            echo "Follow standard storage guidelines";
                    }
                    ?>
                </td>



            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



   <?php
        // LATIHAN DALAM KELAS
        // For each medicine:
        // - If stock > 100, display "High Stock" 
        // - If stock >= 50 and stock <= 100, display "Medium Stock"
        // - If stock >= 10 and stock < 50, display "Low Stock"
        // - If stock < 10 and stock > 0, display "Critical Stock"
        // - If stock = 0, display "Out of Stock"
        // - Check if price <> 25.00 and mention pricing status
        // YOUR CODE HERE

        // foreach ($medicines as $medicine) {
        //     if ($medicine['stock'] > 100) {
        //         echo $medicine['name'] . " - High Stock<br>";
        //     } elseif ($medicine['stock'] >= 50 && $medicine['stock'] <= 100) {
        //         echo $medicine['name'] . " - Medium Stock<br>";
        //     } elseif ($medicine['stock'] >= 10 && $medicine['stock'] < 50) {
        //         echo $medicine['name'] . " - Low Stock<br>";
        //     } elseif ($medicine['stock'] < 10 && $medicine['stock'] > 0) {
        //         echo $medicine['name'] . " - Critical Stock<br>";
        //     } elseif ($medicine['stock'] == 0) {
        //         echo $medicine['name'] . " - Out of Stock<br>";
        //     }

        //     if ($medicine['price'] != 25.00) {
        //         echo $medicine['name'] . " - Pricing Status: Not Standard<br>";
        //     }
        // }

        // var_dump($medicines); // nak display array apa yang ada dalam array $edicines

        

   ?>
    

<?php
    $prescriptions = [
    ["prescription_id" => "RX001", "patient" => "Ahmad bin Ali", "medicine_code" => "MED001", "quantity" => 2, "doctor" => "Dr. Siti"],
    ["prescription_id" => "RX002", "patient" => "Siti binti Omar", "medicine_code" => "MED002", "quantity" => 1, "doctor" => "Dr. Kumar"],
    ["prescription_id" => "RX003", "patient" => "Kumar a/l Raj", "medicine_code" => "MED003", "quantity" => 3, "doctor" => "Dr. Fatimah"],
    ["prescription_id" => "RX004", "patient" => "Fatimah binti Hassan", "medicine_code" => "MED004", "quantity" => 2, "doctor" => "Dr. Ahmad"],
    ["prescription_id" => "RX005", "patient" => "Chen Wei Lin", "medicine_code" => "MED005", "quantity" => 1, "doctor" => "Dr. Siti"]
];
?>

    <table class="prescription-table">
        <thead>
            <tr>
                <th>Prescription ID</th>
                <th>Patient</th>
                <th>Medicine Code</th>
                <th>Quantity</th>
                <th>Doctor</th>
                <th>Doctor Prescription Guidelines</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prescriptions as $prescription): ?>
            <tr>
                <td><?php echo $prescription['prescription_id']; ?></td>
                <td><?php echo $prescription['patient']; ?></td>
                <td><?php echo $prescription['medicine_code']; ?></td>
                <td><?php echo $prescription['quantity']; ?></td>
                <td><?php echo $prescription['doctor']; ?></td> 
                <td>
                    <?php  
                        switch($prescription['doctor']) {
                            case 'Dr. Siti';
                            echo "General practitioner - common medications";
                            break;
                            case 'Dr. Kumar';
                            echo "Specialist - targeted treatments";
                            break;
                            case 'Dr. Fatimah';
                            echo "Pediatrician - child-safe dosages";
                            break;
                            case 'Dr. Ahmad';
                            echo "Internal medicine - chronic conditions";
                            break;
                        default:
                            echo "Standard prescription review needed";
                        }
                
                    ?>
                </td>               
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- <?php

    $doctortoFind = "Dr. Siti";

        $doctorName = array_column($medicines, 'doctor');

        $keyword = array_search($doctortoFind, $doctorName);

        if ($keyword !== false) {
            echo "Doctor found: " . $doctorName[$keyword] . "<br>";
        } else {
            echo "Doctor not found<br>";
        }

        ?> -->

</body>
</html>