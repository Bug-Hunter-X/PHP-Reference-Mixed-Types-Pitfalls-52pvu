```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $result[] = strtolower($value);
    } else {
      $result[] = $value; // Preserve original value for non-strings
    }
  }
  return $result;
}

$data = ['Apple', 'Banana', 123, 'Orange'];
$processedData = processData($data);
print_r($processedData); // All values are handled correctly
```