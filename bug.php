```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_string($value)) {
      $value = strtolower($value);
    }
  }
  return $data;
}

$data = ['Apple', 'Banana', 123, 'Orange'];
$processedData = processData($data);
print_r($processedData); // Notice: Only strings are converted to lowercase, while integers remain unchanged.
```