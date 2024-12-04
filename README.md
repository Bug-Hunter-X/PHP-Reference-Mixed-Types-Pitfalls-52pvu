# PHP Pass-by-Reference and Type Handling Issue

This example demonstrates a subtle bug that can occur in PHP when using pass-by-reference in functions that process arrays containing mixed data types.  The code intends to convert all string values in an array to lowercase. However, due to how PHP handles pass-by-reference and type checking within the loop, it only converts strings, leaving other data types unchanged. This could lead to unexpected results in applications that rely on consistent data transformation.

The solution demonstrates a safer and more predictable approach.