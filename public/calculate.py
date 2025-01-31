import sys
import math

# Obtener los argumentos de la línea de comandos
if len(sys.argv) != 4:
    print("Error: 3 arguments are required.")
    sys.exit(1)

try:
    a = float(sys.argv[1])
    b = float(sys.argv[2])
    c = float(sys.argv[3])
except ValueError:
    print("Error: numerical values.")
    sys.exit(1)

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