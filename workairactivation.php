<?php 
/* Template Name: Workair Activation */
wp_enqueue_script('serialweb', get_template_directory_uri().'/plug_work_activation/workair_activation_scripts.js',array(),'23032021' , true );
wp_enqueue_style('workairstyle', get_template_directory_uri().'/plug_work_activation/workair.css', '10202',true );
 ?>
<?php get_header(); ?>
<?php if(ICL_LANGUAGE_CODE == 'it'){ ?>

  <div id="broswerNotSupporterMessage" class="help-content modal_elem hidden">
    <div class="messagge">
        <p>Sorry, <b>Web Serial</b> is not supported on this device, make sure you're 
        running Chrome 80 or later or Edge and have enabled the 
        <code>#enable-experimental-web-platform-features</code> flag in
        <code>chrome://flags or edge://flags</code></p>
        <p>Click <button id="text_to_copy" onclick="copyTo()" data-tocopy="chrome://flags/#enable-experimental-web-platform-features">chrome://flags</button> to view the guide;</p>
        <p class="mt-5>">Call D-Air Lab Team if you need to get support: <b>04441429920</b></p>
    </div>
  </div>
  <div id="connectionError" class="help-content modal_elem hidden">
    <div class="messagge">
      <div class="wrapper">
    <h2>Errore di connessione con il dispositivo.</h2>
    <p>Situazioni più comuni:</p>
      <ol>
      <li>
          <p>Assicurati di aver selezionato il dispositivo corretto durante la richiesta di connessione</p>
      </li>
        <li>
          <p>Assicurati di non avere un'altra finestra del browser aperta su questo stesso indirizzo.</p>
      </li>
      <li>
        <p>Se utilizzi Linux è necessario permettere la scrittura sul dispositivo con il comando "sudo chmod a+rw ..percorso_del_seriale"</p>
      </li>
      <li>
        <p>Un' applicazione del tuo sistema operativo sta comunicando o tiene occupato il dispostivo</p>
      </li>
    </ol>
      <p>Se il problema persiste anche dopo aver verificato tutte le situazioni, contattaci:  Tel: +39 0444 142 9920 o per email: info@dailab.com </p>
        </div>
        <a href="https://dairlab.com/workair-activation/" class="btn btn-primary b-radius">Riprova</a>
        </div>
  </div>
  <div id="viewIfmobile" class="help-content modal_elem hidden">
          <p>Per utilizzare questo servizio è necessario collegarsi con Chrome o Edge in modalità desktop.</p>
  </div>

  <div id="activationSussesfully" class="help-content modal_elem hidden">
    <div class="wrapper">
      <div id="user_policy_notify" class="messagge">
        <h2>Workair Sbloccato!</h2>
        <p>Ora è possibile scollegare il dispositivo dal computer.</p>
        <p>Se durante la fase di spegnimento il dispositivo vibra con un lampeggio dei led di colore arancione è necessario rifare la procedura di sblocco oppure contattare l’assistenza.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <a href="https://dairlab.com" class="btn btn-primary w-custom b-radius mt-5">OK</a>
        </div>
        <div class="col-md-6 text-right">
          <a href="https://dairlab.com/workair-activation/" class="btn btn-primary b-radius mt-5">Sblocca altro Workair</a>
        </div>
      </div>

    </div>
  </div>

  <div id="notConnected" class="help-content modal_elem hidden">
    <div class="messagge">
    <p>Workair non è connesso al tuo computer,oppure il dispositivo è occupato.<br>
    Se il problema persiste, riavvia il browser e assicurati di aver collegato tramite la porta USB e riavvia la procedura</p>
     </div>
  </div>


  <div id="codeErrorSbloccoMessage" class="help-content modal_elem hidden">
     <div class="messagge">
      <p>Il codice di sblocco non è corretto assicurati di averlo copiato correttamente o richiedi nuovamente il codice di sblocco.</p>
      <button id="retryBt" class="btn btn-primary m-0auto">Riprova</button>
        </div>
  </div> 

  <div id="systemErrorMessage" class="help-content modal_elem hidden"><div class="messagge"></div></div>

  <?php get_template_part('plug_work_activation/it_help'); ?>

<div id="main-content-workair" class="container">

  <!-- <div id="helperBlock" class="hidden">

    <div id="securityMessage" class="helper-message hidden">
      <p>Terminata la procedura di attivazione del Workair o della richiesta del codice ti consigliamo di disattivare le future #enable-experimental-web-platform-features del browser.  
    Clicca qui  <button id="text_to_copy" onclick="copyTo()" data-tocopy="chrome://flags/#enable-experimental-web-platform-features">chrome://flags</button></p>
    </div>
    
  </div> -->

  <div class="workair-page-header">
    <h2 class="mt-3rem text-center">Benvenuto nel servizio di attivazione WorkAir</h2>
    <div id="workairConnected" class="hidden"><span class="circle"></span>WorkAir Connesso</div>
    <!-- to improve button disconnection-->
    <div id="closedConnection" class="hidden">Disconnetti</div> 
  </div>
  <div id="connectDeviceArea" class="help-content hidden w100 bg-blue">
      <p class="text-center">Collega Workair ad una porta Usb poi clicca su "Connetti Workair"</p>
      <button id="butConnect" type="button" class="btn btn-workair m-0auto">Connetti Workair</button>
  </div>

  <div id="guida_for_user" class="help-content w100 bg-blue mt-2rem">
      <p class="text-center">Se hai bisogno di aiuto clicca sul tasto info</p>
      <button id="guide_start" type="button" class="btn btn-workair m-0auto">info</button>
  </div>


  <div id="requestCodeAuth" class="help-content hidden w100 bg-green t-white mt-2rem">
      <div id="requestCodeAuthInner">
        <p class="text-center">Richiedi il codice di sblocco del tuo Workair</p>
        <button id="getdairLabIDBt" type="button" class="btn btn-workair m-0auto t-green">Clicca Qui</button>
      </div>
      <div id="modalContact" class="hidden t-white">
      <p class="text-center">Completa il modulo con le informazioni mancanti e riceverai il codice di sblocco entro 24 ore</p>
        <?php echo do_shortcode('[contact-form-7 id="811" title="Attivazione workair"]'); ?>
      </div>
  </div>
  <div id="deblockWorkair" class="help-content hidden w100 bg-blue mt-2rem">
      <p class="text-center">Se possiedi già un codice,inseriscilo e clicca attiva</p>
      <input type="text" id="codeWorkair" class="w100"  placeholder="00000...">
      <button id="activateWorkairBt" type="button" class="btn btn-workair m-0auto">Attiva Workair</button>
  </div>

  <div id="responseData" class="w100"></div>
  <button id="backBt" type="button" class="btn btn-workair m-0auto hidden">Indietro</button>
  <div id="versionatore">V.<span id="versionFile"></span></div>
</div>

<?php } else { ?>

  <div id="broswerNotSupporterMessage" class="help-content modal_elem hidden">
    <div class="messagge">
        <p>Sorry, <b>Web Serial</b> is not supported on this device, make sure you're 
        running Chrome 80 or later or Edge and have enabled the 
        <code>#enable-experimental-web-platform-features</code> flag in
        <code>chrome://flags or edge://flags</code></p>
        <p>Click <button id="text_to_copy" onclick="copyTo()" data-tocopy="chrome://flags/#enable-experimental-web-platform-features">chrome://flags</button> to view the guide;</p>
        <p class="mt-5>">Call D-Air Lab Team if you need to get support: <b>04441429920</b></p>
    </div>
  </div>
  <div id="connectionError" class="help-content modal_elem hidden">
    <div class="messagge">
      <div class="wrapper">
    <h2>Connection error with the device</h2>
    <p>Most common problems:</p>
      <ol>
      <li>
          <p>Ensure that you have selected the correct device during the connection request</p>
      </li>
        <li>
          <p>Ensure that another browser window is not open at this same address</p>
      </li>
      <li>
        <p>With Linux, you have to add write permission to device by a terminal command "sudo chmod a+rw your_serial_device_port_name"</p>
      </li>
      <li>
        <p>An application on your operating system is communicating with the device or keeping it occupied</p>
      </li>
    </ol>
      <p>If the problem persists even after you have checked all these situations, contact us:   Tel: +39 0444 142 9920 or email: info@dailab.com </p>
        </div>
        <a href="https://dairlab.com/en/workair-activation/" class="btn btn-primary b-radius">Try Again</a>
        </div>
  </div>
  <div id="viewIfmobile" class="help-content modal_elem hidden">
          <p>Per utilizzare questo servizio è necessario collegarsi con Chrome o Edge in modalità desktop.</p>
  </div>

  <div id="activationSussesfully" class="help-content modal_elem hidden">
    <div class="wrapper">
      <div id="user_policy_notify" class="messagge">
        <h2>Workair unlocked!</h2>
        <p>You can now disconnect the device from the computer.</p>
        <p>Workair unlocked. You can now disconnect the device from the computer. 
          If the device vibrates and the orange LEDs blink when the device is switching off,
          you need to perform the unlock procedure again or contact customer service.</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <a href="https://dairlab.com/en/" class="btn btn-primary w-custom b-radius mt-5">OK</a>
        </div>
        <div class="col-md-6 text-right">
          <a href="https://dairlab.com/en/workair-activation/" class="btn btn-primary b-radius mt-5">Unlock another Workair</a>
        </div>
      </div>

    </div>
  </div>

  <div id="notConnected" class="help-content modal_elem hidden">
    <div class="messagge">
    <p>Workair non è connesso al tuo computer,oppure il dispositivo è occupato.<br>
    Se il problema persiste, riavvia il browser e assicurati di aver collegato tramite la porta USB e riavvia la procedura</p>
     </div>
  </div>


  <div id="codeErrorSbloccoMessage" class="help-content modal_elem hidden">
     <div class="messagge">
      <p>The unlock code is incorrect. Make sure that you have entered the code correctly or request a new unlock code.</p>
      <button id="retryBt" class="btn btn-primary m-0auto">Try again</button>
        </div>
  </div> 

  <div id="systemErrorMessage" class="help-content modal_elem hidden"><div class="messagge"></div></div>

  <?php get_template_part('plug_work_activation/en_help'); ?>


<div id="main-content-workair" class="container">

  <!-- <div id="helperBlock" class="hidden">

    <div id="securityMessage" class="helper-message hidden">
      <p>Terminata la procedura di attivazione del Workair o della richiesta del codice ti consigliamo di disattivare le future #enable-experimental-web-platform-features del browser.  
    Clicca qui  <button id="text_to_copy" onclick="copyTo()" data-tocopy="chrome://flags/#enable-experimental-web-platform-features">chrome://flags</button></p>
    </div>
    
  </div> -->

  <div class="workair-page-header">
    <h2 class="mt-3rem text-center">Welcome to the Workair activation service</h2>
    <div id="workairConnected" class="hidden"><span class="circle"></span>WorkAir Connected</div>
    <!-- to improve button disconnection-->
    <div id="closedConnection" class="hidden">Disconnetti</div> 
  </div>

  <div id="connectDeviceArea" class="help-content hidden w100 bg-blue">
      <p class="text-center">Connect Workair to a USB port, then click on “Connect Workair”</p>
      <button id="butConnect" type="button" class="btn btn-workair m-0auto">Connect Workair</button>
  </div>

  <div id="guida_for_user" class="help-content w100 bg-blue mt-2rem">
      <p class="text-center">If you need help, click on the info button</p>
      <button id="guide_start" type="button" class="btn btn-workair m-0auto">info</button>
  </div>

  <div id="requestCodeAuth" class="help-content hidden w100 bg-green t-white mt-2rem">
      <div id="requestCodeAuthInner">
        <p class="text-center">Request the unlock code for your Workair</p>
        <button id="getdairLabIDBt" type="button" class="btn btn-workair m-0auto t-green">Click here</button>
      </div>
      <div id="modalContact" class="hidden t-white">
      <p class="text-center">Complete the form with the missing information and you will receive the unlock code within 24 hours</p>
        <?php echo do_shortcode('[contact-form-7 id="810" title="EN ACTIVATION WORKAIR"]'); ?>
      </div>
  </div>
  <div id="deblockWorkair" class="help-content hidden w100 bg-blue mt-2rem">
      <p class="text-center">If you already have a code, enter it and click on activate</p>
      <input type="text" id="codeWorkair" class="w100"  placeholder="00000...">
      <button id="activateWorkairBt" type="button" class="btn btn-workair m-0auto">Activate</button>
  </div>

  <div id="responseData" class="w100"></div>
  <button id="backBt" type="button" class="btn btn-workair m-0auto hidden">Back</button>
  <div id="versionatore">V.<span id="versionFile"></span></div>
</div>


<?php } ?>
<?php get_footer(); ?>