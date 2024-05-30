import html
import numpy as np
import cv2
import os

input_images_path = "C:/Users/andre/OneDrive/Escritorio/apiryapp3.0/postpic/Archivos PDF"
files_names = os.listdir(input_images_path)
for file_name in files_names:
    if file_name.split(".")[-1] not in ["jpeg", "jpg", "png"]:
        continue
    image_path = input_images_path + "/" + file_name
    image = cv2.imread(image_path)
    if image is None:
        continue
    
    cv2.imshow("image", image)
    cv2.waitKey(1000)  # Espera 1 segundo antes de mostrar la siguiente imagen

    # Convertimos a escala de grises
    gris = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    cv2.imshow("gris", gris)
    cv2.waitKey(1000) 

    # Aplicar suavizado Gaussiano
    gauss = cv2.GaussianBlur(gris, (15,15), 0)
    cv2.imshow("suavizado", gauss)
    cv2.waitKey(1000)

    # Detectamos los bordes con Canny
    canny = cv2.Canny(gauss, 120, 175)
    cv2.imshow("canny", canny)
    cv2.waitKey(1000)

    # Buscamos los contornos
    (contornos,_) = cv2.findContours(canny.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

    # Mostramos el número de objetos por consola
    print("He encontrado {} ".format(len(contornos)))
    numero_objetos = len(contornos)
nombre = f"He encontrado {numero_objetos} "
mensaje = f"Varroas localizadas, {nombre}!"

html_content = f"""
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Saludo</title>
</head>
<body>
    <h1>{html.escape(mensaje)}</h1>
    <h1>Si el porcentaje es elevado a dichas cantidades como se muestra en la tabla es recomendable tomar acciones apresuradas para el bienestar de tu colmena</h1>
    <img src="C:/Users/andre/OneDrive/Escritorio/apiryapp3.0/tabla.png">
    <h2>Manuales para disminuir la cifra elevada de Varroa destructor</h2>
    <h3>1.-Modo 1 para disminuir las varroas destructoras</h3>
    <a href="https://www.latiendadelapicultor.com/blog/varroa-destructor-que-es-y-como-tratarla/">Más información sobre Varroa Destructor</a><br>
    <h3>2.-Modo 2 para disminuir las varroas destructoras</h3>    
    <a href="https://osiap.org.mx/senasica/sites/default/files/Varroa1%20(1)-ilovepdf-compressed.pdf">Documento sobre el control de Varroa</a><br>
    <h3>3.-Modo 3 para disminuir las varroas destructoras</h3>
    <a href="https://pollinators.psu.edu/assets/uploads/documents/Me%CC%81todos-para-el-control-de-Varroa-destructor-un-enfoque-de-manejo-integrado-de-plagas.pdf">Métodos para el control de Varroa - The Center for Pollinator Research</a>
</body>
</html>
"""

with open ("C:/Users/andre/OneDrive/Escritorio/apiryapp3.0/resultado.doc", "w") as f:
     f.write(html_content)

    # Hallar contornos
cv2.drawContours(image,contornos,-1,(0,0,255), 2)
cv2.imshow("contornos", image)
cv2.waitKey(1000)  # Espera 1 segundo antes de mostrar la siguiente imagen

cv2.destroyAllWindows()
