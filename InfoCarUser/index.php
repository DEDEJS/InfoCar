<?php
ini_set('default_charset','UTF-8');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InfoCar - Controle Veicular Inteligente</title>
  <link  type="text/css" rel="stylesheet"  href="Assets/CSS/index.css">
  <script src="Assets/JS/Interacao.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <h1>InfoCar</h1>
      <nav>
        <ul>
          <li><a href="#features">Funcionalidades</a></li>
          <li><a href="#plans">Planos</a></li>
          <li><a href="#clients">Para quem é</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav>
      <a href="#plans" class="btn-header">Testar Grátis</a>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="hero-text">
        <h2>Seu histórico veicular em um só lugar</h2>
        <p>Para motoristas e empresas que querem controle e praticidade</p>
        <a href="#plans" class="btn-primary">Comece Grátis</a>
        <a href="#plans" class="btn-secondary">Ver Planos</a>
      </div>
      <div class="hero-image"></div>
    </div>
  </section>

  <section id="clients" class="clients">
    <div class="container">
      <h2>Para quem é o InfoCar</h2>
      <div class="cards">
        <article>
          <h3>Dono de carro</h3>
          <p>Acompanhe revisões, manutenções e gastos do seu veículo</p>
        </article>
        <article>
          <h3>Oficinas</h3>
          <p>Ganhe fidelidade e organize seus atendimentos com eficiência</p>
        </article>
        <article>
          <h3>Frotas</h3>
          <p>Controle múltiplos veículos com relatórios completos</p>
        </article>
      </div>
    </div>
  </section>

  <section id="features" class="features">
    <div class="container">
  <h2>Funcionalidades</h2>
  <ul>
    <li>
      Registro de manutenções e histórico completo
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Permite cadastrar todas as manutenções com datas, quilometragem, descrição e custo. Ideal para acompanhar o histórico do veículo.
      </div>
    </li>
    <li>
      Alertas de manutenção preventiva
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        O sistema envia lembretes automáticos com base na quilometragem ou data para evitar esquecimentos.
      </div>
    </li>
    <li>
      Compartilhamento com oficinas
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Permite compartilhar informações do veículo com oficinas de forma segura, facilitando o atendimento.
      </div>
    </li>
    <li>
      Gestão de veículos e condutores
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Organize múltiplos veículos, motoristas e permissões de acesso com controle completo.
      </div>
    </li>
    <li>
      Relatórios de custos
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Gere relatórios detalhados de gastos com manutenção, combustível, peças e outros.
      </div>
    </li>
    <li>
      Backup em nuvem
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Seus dados são salvos na nuvem automaticamente, com segurança e acesso rápido de qualquer lugar.
      </div>
    </li>
    <li>
      Acesso via app e navegador
      <button class="toggle-info" onclick="toggleInfo(this)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
          <path d="M6 9l6 6 6-6" stroke="#0e70c0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="info-hidden">
        Plataforma disponível tanto via navegador quanto por aplicativo para Android e iOS.
      </div>
    </li>
  </ul>
</div>
</section>

  <section id="plans" class="plans">
    <div class="container">
      <h2>Escolha seu plano</h2>
      <div class="plan-cards">
        <article>
          <h3>Gratuito</h3>
          <p>Ideal para uso pessoal simples</p>
          <ul>
            <li>1 veículo</li>
            <li>Histórico básico</li>
            <li>Acesso Web/App</li>
            <li>Acesso por 7 dias</li>
          </ul>
          <a href="CadastroGratuito.php" class="btn-primary" target="_blank">Começar</a>
        </article>
        <article>
          <h3>Pro</h3>
          <p>Para usuários exigentes e mais veículos</p>
          <ul>
            <li>Até 5 veículos</li>
            <li>Acesso Web/App</li>
            <li>Relatórios avançados</li>
          </ul>
          <a href="CadastroPro.php" class="btn-primary" target="_blank">Assinar</a>
        </article>
        <article>
          <h3>Empresarial</h3>
          <p>Para oficinas e frotas</p>
          <ul>
            <li>Veículos ilimitados</li>
            <li>Multiusuário</li>
            <li>Acesso Web/App</li>
            <li>Relatórios avançados</li>
            <li>Suporte prioritário</li>
            <li>Alertas por e-mail</li>
          </ul>
          <a href="CadastroEmpresarial.php" class="btn-primary" target="_blank">Assinar</a>
        </article>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <h2>Pronto para simplificar a vida do seu carro ou da sua empresa?</h2>
      <a href="#plans" class="btn-primary">Criar conta grátis</a>
    </div>
  </section>

  <section id="faq" class="faq">
    <div class="container">
      <h2>Perguntas Frequentes</h2>
      <details>
        <summary>O plano gratuito tem limite de veículos?</summary>
        <p>Sim, apenas 1 veículo.</p>
      </details>
      <details>
        <summary>Posso migrar de plano depois?</summary>
        <p>Sim, você pode mudar de plano a qualquer momento.</p>
      </details>
      <details>
        <summary>O sistema é seguro?</summary>
        <p>Sim, utilizamos criptografia e backups frequentes.</p>
      </details>
      <details>
        <summary>Como funcionam os backups?</summary>
        <p>Backups são automáticos e armazenados em nuvem.</p>
      </details>
        <details>
        <summary>O plano é anual? </summary>
        <p>Não, os planos pagos são mensais</p>
      </details>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 InfoCar. Todos os direitos reservados.</p>
      <nav>
        <a href="#">Sobre</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos de Uso</a>
      </nav>
    </div>
  </footer>
</body>
</html>
