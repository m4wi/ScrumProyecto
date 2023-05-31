import mysql.connector # pip install mysql-connector-python
import sys

# Verificar si se proporcionó un argumento de archivo
if len(sys.argv) < 2:
    print("Debe proporcionar el nombre del archivo como argumento.")
    sys.exit(1)

# Establecer la conexión con la base de datos
conexion = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="Ferreteria"
)

# Obtener el nombre del archivo del primer argumento
query = sys.argv[1]

# Crear un cursor para ejecutar las consultas SQL
cursor = conexion.cursor()

# Intentar abrir el archivo y leer su contenido
try:
    # Leer el archivo de texto que contiene los comandos INSERT
    with open(query, "r") as archivo:
        lineas = archivo.readlines()

    # Ejecutar los comandos INSERT en la base de datos
    for linea in lineas:
        cursor.execute(linea.strip())

    # Confirmar los cambios y cerrar la conexión
    conexion.commit()
    cursor.close()
    conexion.close()

    print("Inserciones realizadas correctamente.")

except FileNotFoundError:
    print("El archivo no existe.")
except IOError:
    print("Error al leer el archivo.")