# PHP Assignment - Pharmacy Inventory Management System

## Overview
Practice PHP arrays, foreach loops, HTML tables, and conditional statements using pharmacy data.

## Given Arrays (DO NOT MODIFY)

```php
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

$prescriptions = [
    ["prescription_id" => "RX001", "patient" => "Ahmad bin Ali", "medicine_code" => "MED001", "quantity" => 2, "doctor" => "Dr. Siti"],
    ["prescription_id" => "RX002", "patient" => "Siti binti Omar", "medicine_code" => "MED002", "quantity" => 1, "doctor" => "Dr. Kumar"],
    ["prescription_id" => "RX003", "patient" => "Kumar a/l Raj", "medicine_code" => "MED003", "quantity" => 3, "doctor" => "Dr. Fatimah"],
    ["prescription_id" => "RX004", "patient" => "Fatimah binti Hassan", "medicine_code" => "MED004", "quantity" => 2, "doctor" => "Dr. Ahmad"],
    ["prescription_id" => "RX005", "patient" => "Chen Wei Lin", "medicine_code" => "MED005", "quantity" => 1, "doctor" => "Dr. Siti"]
];
?>
```

## Exercises

### Exercise 1: Medicine Inventory Table
**Task:** Use foreach loop to display all medicine data in an HTML table

```php
// Create table with headers: Code, Name, Category, Price (RM), Stock, Expiry (Months)
// YOUR CODE HERE
```

### Exercise 2: Prescription Records Table  
**Task:** Use foreach loop to display prescription data in an HTML table

```php
// Create table with headers: Prescription ID, Patient, Medicine Code, Quantity, Doctor
// YOUR CODE HERE
```

### Exercise 3: Stock Level Analysis
**Task:** Use if-else statements and comparison operators to analyze stock levels

```php
// For each medicine:
// - If stock > 100, display "High Stock" 
// - If stock >= 50 and stock <= 100, display "Medium Stock"
// - If stock >= 10 and stock < 50, display "Low Stock"
// - If stock < 10 and stock > 0, display "Critical Stock"
// - If stock = 0, display "Out of Stock"
// - Check if price <> 25.00 and mention pricing status
// YOUR CODE HERE
```

### Exercise 4: Expiry Alert System
**Task:** Use if-else and comparison operators to check medicine expiry

```php
// For each medicine:
// - If expiry_months > 24, display "Long Term Storage"
// - If expiry_months >= 12 and <= 24, display "Medium Term" 
// - If expiry_months >= 6 and < 12, display "Short Term"
// - If expiry_months < 6, display "Expires Soon - Priority Sale"
// - If expiry_months <> 12, mention special handling needed
// YOUR CODE HERE
```

### Exercise 5: Medicine Category Management
**Task:** Use switch statement to provide category-specific instructions

```php
// Use switch for each category:
// - "Painkiller": "Store at room temperature"
// - "Antibiotic": "Refrigerate after opening"
// - "Antihistamine": "Keep away from moisture"
// - "Antacid": "Store in cool, dry place" 
// - "Diabetes": "Monitor blood sugar levels"
// - "Cholesterol": "Take with evening meal"
// - Default: "Follow standard storage guidelines"
// YOUR CODE HERE
```

### Exercise 6: Doctor Prescription Patterns
**Task:** Use switch statement to analyze doctor prescribing patterns

```php
// Use switch for each doctor in prescriptions:
// - "Dr. Siti": "General practitioner - common medications"
// - "Dr. Kumar": "Specialist - targeted treatments"
// - "Dr. Fatimah": "Pediatrician - child-safe dosages"
// - "Dr. Ahmad": "Internal medicine - chronic conditions"
// - Default: "Standard prescription review needed"
// YOUR CODE HERE
```

## Grading Criteria
- Foreach loops (20 points)
- HTML table formatting (15 points)
- If-else implementation (20 points)
- Comparison operators (15 points)
- Switch statements (20 points)
- Code organization (10 points)

**Total: 100 points**