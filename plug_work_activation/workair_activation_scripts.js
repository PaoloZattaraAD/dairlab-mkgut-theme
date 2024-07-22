// check if js active
document.body.className = document.body.className.replace("no-js","js");
//check if mobile
const viewIfmobile = document.getElementById('viewIfmobile');


//DOM ELEMENT MAIN REFERENCE

const helperBlock = document.getElementById('helperBlock'); // Full screen DEP #systemErrorMessage
const connectionError = document.getElementById('connectionError'); // Full screen DEP #systemErrorMessage 
const connectDeviceArea = document.getElementById('connectDeviceArea');
const requestCodeAuth = document.getElementById('requestCodeAuth');
const requestCodeAuthInner = document.getElementById('requestCodeAuthInner');
const deblockWorkair = document.getElementById('deblockWorkair');
const modalContact = document.getElementById('modalContact'); // form module
const workairConnected = document.getElementById('workairConnected'); 
const guida_for_user = document.getElementById('guida_for_user'); 
const guide_start = document.getElementById('guide_start'); 
const removeGuide = document.getElementById('removeGuide');
// TEXT MESSAGE CONSTANT

const broswerNotSupporterMessage = document.getElementById('broswerNotSupporterMessage'); 
const systemErrorMessage = document.getElementById('systemErrorMessage'); 
const usabilityMessage = document.getElementById('usabilityMessage'); 
const notConnectedMessage = document.getElementById('notConnectedMessage');
const codeErrorSbloccoMessage = document.getElementById('codeErrorSbloccoMessage');
const securityMessage = document.getElementById('securityMessage');
const activationSussesfully = document.getElementById('activationSussesfully'); // form module
const activationError = document.getElementById('activationError'); // form module

// CHECK BROWSER COMPATIBILITY && DESKTOP  && Safety if active

if('serial' in navigator){
  //helperBlock.classList.toggle('hidden');
  //securityMessage.classList.toggle('hidden');
  connectDeviceArea.classList.toggle('hidden');
} else {
  broswerNotSupporterMessage.classList.toggle('hidden');
}


// STRING CODE COMMAND WORKAIR 

const serialNumberReq = new Uint8Array([225,1,0,13,18]); // return string 18 -> Request to serialNumber
const dairLabID = new Uint8Array([225,1,0,9,22]); // return string 14 -> Request to dairLabID

// Get Dairlab id ACtion

const getdairLabIDBt = document.getElementById('getdairLabIDBt');
const activateWorkairBt = document.getElementById('activateWorkairBt');
const codeWorkair = document.getElementById('codeWorkair');
const backBt = document.getElementById('backBt');
const retryBt = document.getElementById('retryBt');

// WORKAIR FILTER DEVICE

const filter = { usbVendorId: 0x483 };

// API CONNECTION

let port;
let reader;
let inputStream;
let outputStream;
let keepReading = true;
let serial;
let dariid;
let debug = false;


//debug antichace file versione
let versionfile = "10";
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('versionFile').textContent= versionfile;
});




// Open Connection Device

async function connect() {
  try {
    port = await navigator.serial.requestPort({ filters: [filter] });
    await port.open({ baudRate: 230400 });
    workairConnected.classList.toggle('hidden');
    connectDeviceArea.classList.toggle('hidden');
    requestCodeAuth.classList.toggle('hidden');
    deblockWorkair.classList.toggle('hidden');
    guida_for_user.classList.toggle('hidden');
    //start reading
  } catch (e) {
    connectionError.classList.toggle('hidden');
    if(debug){
      console.log(e + ' errore di connessione');
    }
    inputStream = null;
    reader = null;
  }
} 
// Get Workair Data

// Write Read Main Function
async function writeToWorkair(messagetosend){
  if(debug){
    console.log('Inviato '+messagetosend);
  }
  outputStream = port.writable.getWriter();
  await outputStream.write(messagetosend);
  outputStream.releaseLock();
  inputStream = port.readable;
  //reader = inputStream.getReader();
  let resval = await readUntilClosed();
  if(debug){
    console.log('exit to readUntilclosed');
  }
  return resval;
}

// Send Write Request
async function getdataWorkair(message) {
    const coderesponse = await writeToWorkair(message);
    return coderesponse;
}

// Reading bus & Process Data

async function readUntilClosed() {
  if(debug){
    console.log('Entrato su readUNtilclosed');
  }
  while (inputStream) {
	reader = inputStream.getReader();
    try {
      while (true) {
        const { value, done } = await reader.read();
        let rest;
        if (done) {
          //reader.cancel();
          if(debug){
            console.log('chiuso done');
          }
          break;
        }
        if (value) {
          if(debug){
		       console.log('valore di risposta' + value);
          }
          // get serial
          if(value.length == 18 ){
          rest  = value.slice(5,17);
          serial = String.fromCharCode(...rest);
          if(debug){
            console.log('[Risposta] '+serial); 
          }
          return serial;
          }
	        if(value.length == 17 ){
          rest  = value.slice(4,16);
          serial = String.fromCharCode(...rest);
          if(debug){
            console.log('[Risposta] '+serial);
          } 
          return serial;
          }
          //get dairid
          if(value.length == 14 ){
            rest  = value.slice(5,13);
            dariid =  String.fromCharCode(...rest);
            if(debug){
            console.log('[Risposta] '+dariid); 
            }
            return dariid;
          }
          if(value.length == 13 ){
            rest  = value.slice(4,12);
            dariid =  String.fromCharCode(...rest);
            if(debug){
            console.log('[Risposta] '+dariid); 
            }
            return dariid;
          }
          //sblocca workair corretto
          if (value.length==5 && value[4]==246) {
              activationSussesfully.classList.toggle('hidden');
              if(debug){
              console.log(`[Risposta] Attivato ${value}`); 
              }
              return 'active';
          }
		      if (value.length==4 && value[3]==246) {
              activationSussesfully.classList.toggle('hidden');
              if(debug){
              console.log(`[Risposta] Attivato ${value}`); 
              }
              return 'active';
          }
          //sblocca workair errato
          if (value.length==5 && value[4]==151) {
            codeErrorSbloccoMessage.classList.toggle('hidden');
            if(debug){
            console.log(`[Risposta] Errore Codice ${value}`); 
            }
            return 'codiceerrato';
          }
          if (value.length==4 && value[3]==151) {
            codeErrorSbloccoMessage.classList.toggle('hidden');
            if(debug){
              console.log(`[Risposta] Errore Codice ${value}`); 
            }
              return 'codiceerrato';
          } 

        }
      }
    } catch (error) {
      if(debug){
      console.log(error);
      }
      reader = null;
    } finally {
      // Allow the serial port to be closed later.
      reader.releaseLock();
      if(debug){
      console.log('chiusa lettura / scrittura');
      console.log(' ');
      }
    }
  }

  reader.releaseLock();
}






function checkcodeErrorBeforeStreamCode(){
  if(getUserCode(codeWorkair) === 'codeDeblockError'){
    codeErrorSbloccoMessage.classList.toggle('hidden');
    if(debug){
    console.log('error on activate');
    }
  } else {
    send_string = convertString(getUserCode(codeWorkair));
    getdataWorkair(send_string);
  }
}

// Connect Device

async function clickConnect() {
  await connect();
}

// TOOLS CUSTOM WORKAIR


//convert user input Base 16 Uint8Array
function convertString(crypto) {
  my_array = [];
  for (i = 0; i < crypto.length/2; i++) {
  var input = crypto.substring(i*2, i*2+2);
  var base10 = parseInt(input, 16); // Base 16 or hexadecimal
  my_array.push(base10);
  }
  //send data
  return new Uint8Array(my_array);
}


// error code e810002bb990140489b8d29c9367fca166348b1a
// test code e810002c4cf42749b223f58365a155a16aabdf34

//sanitize input value for deblock 
function getUserCode(el) {
  let crypto = el.value;
  if(crypto.length === 40){
  crypto.replace(/[^0-9a-z]/gi, '');
  return crypto;
  } else { 
    console.log('errore codice');
    return "codeDeblockError";
  }
}


// User Experience Funct

function copyTo() {
  /* Get the text field */
  var text = 'chrome://flags/#enable-experimental-web-platform-features';
  navigator.clipboard.writeText(text).then(function() {
    alert('You copied the url correctly. Now you must paste it into your Chrome Search Bar or Edge end then you must enable the feature highlighted.');
  }, function(err) {
    console.error('Async: Could not copy text: ', err);
  });
}


retryBt.addEventListener('click', ()  => {
  codeErrorSbloccoMessage.classList.toggle('hidden');
});




// Extract Data

const butConnect = document.getElementById('butConnect');

document.addEventListener('DOMContentLoaded', () => {
  butConnect.addEventListener('click', clickConnect);

});

if(activateWorkairBt){
    activateWorkairBt.addEventListener('click', event  => {
     checkcodeErrorBeforeStreamCode();
  });
}

if(getdairLabIDBt){
  getdairLabIDBt.addEventListener('click', e  => {
    requestCodeAuthInner.classList.toggle('hidden');
    modalContact.classList.toggle('hidden');
    deblockWorkair.classList.toggle('hidden');
    backBt.classList.toggle('hidden');
    // const serialss = await getdataWorkair(serialNumberReq);
    // const dariidss = await getdataWorkair(dairLabID);
    // document.getElementById('serialNumbervalue').value = serialss;
    // document.getElementById('dairlabidvalue').value = dariidss;
    // console.log('[seriale]'+serial);
    // console.log('[dairlabid]'+dariid);
  });
}

const addSerialtoform = document.getElementById('getSerialNumber');
const addDidtoform = document.getElementById('getDairlabID');

if(addSerialtoform){
  addSerialtoform.addEventListener('click', async()  => {
    if(!document.getElementById('serialNumbervalue').value){
    const serialss = await getdataWorkair(serialNumberReq);
    document.getElementById('serialNumbervalue').value = serialss;
      if(debug){
        console.log('[seriale]'+serial);
        console.log('');
      }
    }
  });
}

if(addDidtoform){
  addDidtoform.addEventListener('click', async()  => {
    if(!document.getElementById('dairlabidvalue').value){
    const dariidss = await getdataWorkair(dairLabID);
    document.getElementById('dairlabidvalue').value = dariidss;
    if(debug){
      console.log('[seriale]'+dariidss);
      console.log('');
     }
    }
  });
}



if(backBt){
  backBt.addEventListener('click', event  => {
    requestCodeAuthInner.classList.toggle('hidden');
    modalContact.classList.toggle('hidden');
    deblockWorkair.classList.toggle('hidden');
    backBt.classList.toggle('hidden');
  });
}

// for console testing

async function scrivi(newmessage){
  const tosent = await getdataWorkair(newmessage);
  console.log(tosent);
}

if(guide_start){
  guide_start.addEventListener('click', event  => {
    usabilityMessage.classList.toggle('hidden');
  });
}

if(removeGuide){
  removeGuide.addEventListener('click', event  => {
    usabilityMessage.classList.toggle('hidden');
  });
}