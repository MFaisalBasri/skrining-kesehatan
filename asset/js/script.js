function hitungSkor() {
    const q1Value = parseInt(document.querySelector('input[name="1"]:checked').value);
    const q2Value = parseInt(document.querySelector('input[name="2"]:checked').value);
    const q3Value = parseInt(document.querySelector('input[name="3"]:checked').value);
    
    const totalSkor = q1Value + q2Value + q3Value;
    
    document.getElementById('hasilSkor').innerHTML = `Skor Anda adalah: ${totalSkor}`;
  }