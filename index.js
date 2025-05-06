const express = require('express');
const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.static('public')); // carpeta donde pongas HTML/CSS

app.get('/', (req, res) => {
  res.send('Hola desde Render');
});

app.listen(PORT, () => {
  console.log(`Servidor escuchando en el puerto ${PORT}`);
});
