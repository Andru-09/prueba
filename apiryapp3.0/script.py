from flask import Flask

app = Flask(__name__)

@app.route('/')
def index():
    # Ejecutar el script Python
    import subprocess
    subprocess.call(['python', 'C:/Users/andre/OneDrive/Escritorio/apiryapp3.0/postpic'])
    
    # Aquí puedes agregar cualquier otra lógica o contenido que desees mostrar en la página web
    
    return '¡El script Python se ha ejecutado con éxito!'

if __name__ == '__main__':
    app.run()