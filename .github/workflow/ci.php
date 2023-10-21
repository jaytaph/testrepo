name: Check Test File

on:
  push:
    branches:
      - main

jobs:
  check:
    runs-on: ubuntu-latest

    steps:
      - name: Check contents of test.txt
        run: |
          if grep -q "PASS" test.txt; then
            echo "Test passed!"
          elif grep -q "FAIL" test.txt; then
            echo "Test failed!"
            exit 1
          else
            echo "No result found in test.txt."
            exit 1
          fi
