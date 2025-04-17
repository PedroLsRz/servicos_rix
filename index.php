<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Redirecionamentos</title>
  <link rel="icon" href="rix.ico" type="image/x-icon" />
  <style>
* {
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  overflow: hidden;
  font-family: 'Roboto', sans-serif;
  background-color: #f7f8fc;
  color: #555;
}

/* Layout lado a lado */
body {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  gap: 20px;
  height: 100vh;
}

/* Estilo base dos containers */
.container {
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  padding: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

/* Container da esquerda: 3 colunas × 5 linhas */
.container:nth-of-type(1) {
  width: 860px;
  height: calc(5 * (160px + 7px + 10px) + 50px); /* Ajustado para 7px de distância */
}

/* Container da direita: 1 linha */
.container:nth-of-type(2) {
  width: 420px;
  min-height: 240px;
  max-height: 260px;
  height: fit-content;
}

/* Títulos */
h1 {
  font-size: 2em;
  color: #333;
  margin-bottom: 15px;
  font-weight: 700;
  text-transform: uppercase;
  text-align: center;
}

/* Grade do container da esquerda */
.container:nth-of-type(1) .links {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: 165px;
  gap: 7px; /* Distância reduzida entre os itens */
  justify-items: center;
}

/* Scroll horizontal no container direito */
.container:nth-of-type(2) .links {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  gap: 20px;
  justify-content: center;
  align-items: center;
}

/* Estilo dos itens */
.link-item {
  text-align: center;
  transition: transform 0.3s;
  min-width: 160px;
  max-width: 180px;
  flex-shrink: 0;
}

.link-item:hover {
  transform: scale(1.05);
}

.link-item img {
  width: 100px;
  height: 100px;
  object-fit: contain;
  border-radius: 50%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  transition: transform 0.3s;
}

.link-item img:hover {
  transform: scale(1.1);
}

.link-item span {
  display: block;
  margin-top: 10px;
  font-size: 1.1em;
  font-weight: 500;
  color: #4b4b4b;
  text-transform: capitalize;
  letter-spacing: 1px;
  transition: color 0.3s ease;
}

.link-item span:hover {
  color: #0056b3;
}

.proxmox-img {
  width: 160px;
  height: 160px;
  object-fit: contain;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.proxmox-img + span {
  margin-top: 12px;
  font-weight: 600;
  color: #333;
}

</style>

</head>
<body>
  <!-- Primeiro container -->
  <div class="container">
    <h1>Redirecionamentos</h1>
    <div class="links">
      
    <div class="link-item">
        <a href="http://chamados.rix.com.br" target="_blank">
          <img src="glpi-icon.png" alt="GLPI" />
        </a>
        <span>GLPI</span>
      </div>

      <div class="link-item">
        <a href="http://portainer-projects.rix.com.br" target="_blank">
          <img src="portainer-icon.png" alt="Portainer" />
        </a>
        <span>Portainer Projects</span>
      </div>

      <div class="link-item">
        <a href="http://portainer.rix.com.br" target="_blank">
          <img src="portainer-icon.png" alt="Produção" />
        </a>
        <span>Portainer ANID</span>
      </div>

      <div class="link-item">
        <a href="https://10.0.31.2:8006" target="_blank">
          <img src="proxmox-icon.png" alt="RIX-NODE-JPA1" class="proxmox-img" />
        </a>
        <span>RIX-NODE-JPA1</span>
      </div>

      <div class="link-item">
        <a href="https://10.0.31.4:8006" target="_blank">
          <img src="proxmox-icon.png" alt="RIX-NODE-JPA2" class="proxmox-img" />
        </a>
        <span>RIX-NODE-JPA2</span>
      </div>

      <div class="link-item">
        <a href="https://10.0.31.5:8006" target="_blank">
          <img src="proxmox-icon.png" alt="RIX-NODE-JPA3" class="proxmox-img" />
        </a>
        <span>RIX-NODE-JPA3</span>
      </div>

      <div class="link-item">
        <a href="http://stirling-pdf.rix.com.br" target="_blank">
          <img src="stirling-icon.png" alt="Stirling PDF" />
        </a>
        <span>Stirling PDF</span>
      </div>

      <div class="link-item">
        <a href="https://10.0.31.3:8006" target="_blank">
          <img src="proxmox-icon.png" alt="RIX-NODE-CGE1" class="proxmox-img" />
        </a>
        <span>RIX-NODE-CGE1</span>
      </div>

      <div class="link-item">
        <a href="http://zabbix.rix.com.br" target="_blank">
          <img src="zabbix-icon.png" alt="Zabbix" />
        </a>
        <span>Zabbix</span>
        
      </div>
      <div class="link-item">
        <a href="http://grafana.rix.com.br" target="_blank">
          <img src="grafana-icon.png" alt="Grafana" />
        </a>
        <span>Grafana</span>
      </div>

      <div class="link-item">
        <a href="http://netbox.rix.com.br" target="_blank">
          <img src="netbox-icon.png" alt="Netbox" />
        </a>
        <span>Netbox</span>
      </div>

      <div class="link-item">
        <a href="http://omada-controller.rix.com.br" target="_blank">
          <img src="omada-icon.png" alt="Omada" />
        </a>
        <span>Omada</span>
      </div>

      <div class="link-item">
        <a href="http://npm.rix.com.br" target="_blank">
          <img src="nginx-icon.jpeg" alt="NPM" />
        </a>
        <span>Nginx</span>
      </div>

    </div>
  </div>

  <!-- Segundo container: BNDES -->
  <div class="container">
    <h1>BNDES</h1>
    <div class="links">
      <div class="link-item">
        <a href="http://chamados-bndes.rix.com.br" target="_blank">
          <img src="glpi-icon.png" alt="GLPI_BNDES" />
        </a>
        <span>GLPI</span>
      </div>
      <div class="link-item">
        <a href="http://zabbix-bndes.rix.com.br" target="_blank">
          <img src="zabbix-icon.png" alt="Zabbix_BNDES" />
        </a>
        <span>Zabbix</span>
      </div>  
    </div>
  </div>
</body>
</html>
