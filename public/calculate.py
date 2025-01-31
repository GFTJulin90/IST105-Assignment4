# calculate.py
import sys
import math

# Get the values ​​of a, b and c
a = sys.argv[1]
b = sys.argv[2]
c = sys.argv[3]

# Function to check if a value is numeric
def is_numeric(value):
    try:
        float(value)
        return True
    except ValueError:
        return False

# Check if the values ​​are numeric
if not all(is_numeric(val) for val in [a, b, c]):
    print("Error: All values ​​must be numeric.")
    sys.exit()

a = float(a)
b = float(b)
c = float(c)

# Calculations
output = []

if a < 1:
    output.append("The value of 'a' is too small.")

if b == 0:
    output.append("The value of 'b' is 0, so it will not affect the result.")

if c < 0:
    output.append("Error: The value of 'c' cannot be negative.")
    sys.exit()

if c >= 0:
    c_cubed = c ** 3
    if c_cubed > 1000:
        result = math.sqrt(c_cubed) * 10
    else:
        result = math.sqrt(c_cubed) / a
    result += b
    output.append(f"The final result is: {result}")
    

# Print output in HTML format
print("".join(output))