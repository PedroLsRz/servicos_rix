<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionamentos</title>
    <link rel="icon" href="rix.ico" type="image/x-icon">
    <style>
        /* Global */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f8fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #555;
        }

        /* Container principal */
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 90%;
            max-width: 1200px;
            text-align: center;
            overflow-x: auto;
        }

        /* Título */
        h1 {
            font-size: 2.4em;
            color: #333;
            margin-bottom: 25px;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Links */
        .links {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        /* Itens de link */
        .link-item {
            text-align: center;
            transition: transform 0.3s;
        }

        .link-item:hover {
            transform: scale(1.05);
        }

        .link-item img {
            width: 90px;
            height: 90px;
            transition: transform 0.3s;
            object-fit: contain;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        /* Ajustes para as imagens do Proxmox */
        .proxmox-img {
            width: 200px;
            height: 200px;
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
    <div class="container">
        <h1>Redirecionamentos</h1>
        <div class="links">
            <div class="link-item">
                <a href="http://zabbix.rix.com.br" target="_blank">
                    <img src="zabbix-icon.png" alt="Zabbix">
                </a>
                <span>Zabbix</span>
            </div>
            
            <div class="link-item">
                <a href="http://portainer-projects.rix.com.br" target="_blank">
                    <img src="portainer-icon.png" alt="Portainer">
                </a>
                <span>Portainer Projects</span>
            </div>
            
            <div class="link-item">
                <a href="http://portainer.rix.com.br" target="_blank">
                    <img src="portainer-icon.png" alt="Produção">
                </a>
                <span>Portainer ANID</span>
            </div>

            <div class="link-item">
                <a href="http://chamados.rix.com.br" target="_blank">
                    <img src="glpi-icon.png" alt="GLPI">
                </a>
                <span>GLPI</span>
            </div>

            <div class="link-item">
                <a href="http://stirling-pdf.rix.com.br" target="_blank">
                    <img src="stirling-icon.png" alt="Stirling PDF">
                </a>
                <span>Stirling PDF</span>
            </div>

            <div class="link-item">
                <a href="http://grafana.rix.com.br" target="_blank">
                    <img src="grafana-icon.png" alt="Grafana">
                </a>
                <span>Grafana</span>
            </div>

            <div class="link-item">
                <a href="https://10.0.31.2:8006" target="_blank">
                    <img src="proxmox-icon.png" alt="RIX-NODE-JPA1" class="proxmox-img">
                </a>
                <span>RIX-NODE-JPA1</span>
            </div>

            <div class="link-item">
                <a href="https://10.0.31.4:8006" target="_blank">
                    <img src="proxmox-icon.png" alt="RIX-NODE-JPA2" class="proxmox-img">
                </a>
                <span>RIX-NODE-JPA2</span>
            </div>

            <div class="link-item">
                <a href="https://10.0.31.5:8006" target="_blank">
                    <img src="proxmox-icon.png" alt="RIX-NODE-JPA3" class="proxmox-img">
                </a>
                <span>RIX-NODE-JPA3</span>
            </div>

            <div class="link-item">
                <a href="https:10.0.31.3:8006" target="_blank">
                    <img src="proxmox-icon.png" alt="RIX-NODE-CGE1" class="proxmox-img">
                </a>
                <span>RIX-NODE-CGE1</span>
            </div>

            <div class="link-item">
                <a href="http://netbox.rix.com.br" target="_blank">
                    <img src="netbox-icon.png" alt="Netbox">
                </a>
                <span>Netbox</span>
            </div>
        </div>
    </div>
</body>
</html>

