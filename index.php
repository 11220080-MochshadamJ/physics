    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Physics Hub - Rumus Fisika Interaktif</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🚀 Physics Hub</h1>
                <p>Belajar Fisika Jadi Asik dan Gampang Banget!</p>
            </div>

            <div id="topicsSection" class="topics-grid">
                <div class="topic-card" onclick="showTopic('besaranSatuan')">
                    <h3>📏 Besaran dan Satuan</h3>
                    <p>Pelajari dasar-dasar pengukuran dalam fisika dengan cara yang seru!</p>
                </div>
                
                <div class="topic-card" onclick="showTopic('gerakLurus')">
                    <h3>🏃‍♂️ Gerak Lurus</h3>
                    <p>Pahami konsep kecepatan, percepatan, dan jarak tempuh</p>
                </div>
                
                <div class="topic-card" onclick="showTopic('gaya')">
                    <h3>💪 Gaya dan Hukum Newton</h3>
                    <p>Eksplorasi hukum-hukum Newton yang mengatur gerakan benda</p>
                </div>
                
                <div class="topic-card" onclick="showTopic('energi')">
                    <h3>⚡ Energi dan Usaha</h3>
                    <p>Mengenal berbagai bentuk energi dan cara kerjanya</p>
                </div>
                
                <div class="topic-card" onclick="showTopic('momentum')">
                    <h3>🎯 Momentum dan Impuls</h3>
                    <p>Pelajari konsep momentum dalam tumbukan dan gerakan</p>
                </div>
                
                <div class="topic-card" onclick="showTopic('kinematika')">
                    <h3>🏎️ Kecepatan dan Percepatan</h3>
                    <p>Pelajari kinematika: laju, kecepatan rata-rata, sesaat, dan gerak vertikal</p>
                </div>
            </div>

            <div id="contentArea" class="content-area">
                <button class="btn back-btn" onclick="showTopics()">← Kembali ke Menu</button>
                <div id="topicContent"></div>
            </div>
        </div>

        <script>
            let currentExercise = {};

            const topics = {
                besaranSatuan: {
                    title: "📏 Besaran dan Satuan Fisika",
                    formula: "1 km = 1000 m | 1 kg = 1000 g | 1 jam = 3600 s",
                    explanation: `
                        <strong>Eh, ini dia nih yang paling basic tapi super penting!</strong><br><br>
                        Jadi gini guys, besaran tuh kayak "apa yang mau kita ukur", misalnya panjang, massa, waktu. Nah, satuan tuh "pakai apa kita ngukurnya", kayak meter, kilogram, detik.<br><br>
                        <strong>Besaran Pokok (yang utama banget):</strong><br>
                        • Panjang → meter (m)<br>
                        • Massa → kilogram (kg)<br>
                        • Waktu → sekon (s)<br>
                        • Arus listrik → ampere (A)<br><br>
                        <strong>Besaran Turunan (gabungan yang pokok):</strong><br>
                        • Luas → m²<br>
                        • Volume → m³<br>
                        • Kecepatan → m/s<br>
                        • Percepatan → m/s²
                    `,
                    example: `
                        <strong>Contoh Soal:</strong><br>
                        Pak Budi naik motor dari rumah ke kantor sejauh 5 km dalam waktu 15 menit. Berapa kecepatan rata-rata Pak Budi?<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Diketahui: s = 5 km = 5000 m, t = 15 menit = 900 s<br>
                        Ditanya: v = ?<br><br>
                        v = s/t = 5000 m / 900 s = 5,56 m/s<br><br>
                        Jadi kecepatan Pak Budi adalah 5,56 m/s atau sekitar 20 km/jam.
                    `,
                    exercise: {
                        question: "Sebuah mobil menempuh jarak 150 km dalam waktu 2,5 jam. Berapa kecepatan rata-rata mobil tersebut dalam m/s?",
                        answer: 16.67,
                        tolerance: 0.5,
                        unit: "m/s"
                    }
                },
                
                gerakLurus: {
                    title: "🏃‍♂️ Gerak Lurus",
                    formula: "v = s/t | a = Δv/Δt | s = v₀t + ½at²",
                    explanation: `
                        <strong>Nah ini nih yang bikin kita bisa ngitung seberapa cepet kita lari!</strong><br><br>
                        Gerak lurus itu gerakan benda yang lintasannya berupa garis lurus. Ada dua jenis:<br><br>
                        <strong>1. Gerak Lurus Beraturan (GLB):</strong><br>
                        • Kecepatan tetap (ga berubah)<br>
                        • Rumus: s = v × t<br><br>
                        <strong>2. Gerak Lurus Berubah Beraturan (GLBB):</strong><br>
                        • Kecepatan berubah secara teratur<br>
                        • Rumus: v = v₀ + at<br>
                        • Rumus jarak: s = v₀t + ½at²<br><br>
                        <strong>Tips:</strong> Kalau benda dipercepat, a positif. Kalau direm, a negatif!
                    `,
                    example: `
                        <strong>Contoh Soal GLBB:</strong><br>
                        Sebuah mobil mula-mula diam, lalu dipercepat dengan percepatan 2 m/s². Berapa jarak yang ditempuh dalam 5 detik?<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Diketahui: v₀ = 0 m/s, a = 2 m/s², t = 5 s<br>
                        Ditanya: s = ?<br><br>
                        s = v₀t + ½at²<br>
                        s = 0(5) + ½(2)(5)²<br>
                        s = 0 + ½(2)(25) = 25 m<br><br>
                        Jadi jarak yang ditempuh adalah 25 meter.
                    `,
                    exercise: {
                        question: "Sebuah bola dilempar ke atas dengan kecepatan awal 20 m/s. Jika percepatan gravitasi 10 m/s², berapa tinggi maksimum yang dicapai bola? (gunakan rumus: h = v₀²/2g)",
                        answer: 20,
                        tolerance: 1,
                        unit: "m"
                    }
                },

                gaya: {
                    title: "💪 Gaya dan Hukum Newton",
                    formula: "F = m × a | ΣF = 0 (setimbang) | F₁ = -F₂ (aksi-reaksi)",
                    explanation: `
                        <strong>Ini dia rumus yang bikin kita paham kenapa mobil bisa jalan!</strong><br><br>
                        <strong>Hukum I Newton (Hukum Kelembaman):</strong><br>
                        Benda yang diam akan tetap diam, benda yang bergerak akan tetap bergerak, kecuali ada gaya yang mempengaruhinya.<br><br>
                        <strong>Hukum II Newton:</strong><br>
                        F = m × a<br>
                        Makin besar gaya, makin besar percepatan. Makin berat benda, makin susah dipercepat.<br><br>
                        <strong>Hukum III Newton:</strong><br>
                        Setiap aksi ada reaksi yang sama besar tapi berlawanan arah.<br>
                        Contoh: Waktu kita jalan, kaki dorong tanah ke belakang, tanah dorong kaki ke depan.
                    `,
                    example: `
                        <strong>Contoh Soal:</strong><br>
                        Sebuah kotak bermassa 10 kg didorong dengan gaya 50 N. Berapa percepatan kotak tersebut?<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Diketahui: m = 10 kg, F = 50 N<br>
                        Ditanya: a = ?<br><br>
                        F = m × a<br>
                        50 = 10 × a<br>
                        a = 50/10 = 5 m/s²<br><br>
                        Jadi percepatan kotak adalah 5 m/s².
                    `,
                    exercise: {
                        question: "Sebuah benda bermassa 8 kg bergerak dengan percepatan 3 m/s². Berapa besar gaya yang bekerja pada benda tersebut?",
                        answer: 24,
                        tolerance: 1,
                        unit: "N"
                    }
                },

                energi: {
                    title: "⚡ Energi dan Usaha",
                    formula: "Ek = ½mv² | Ep = mgh | W = F × s",
                    explanation: `
                        <strong>Energi tuh kayak 'bahan bakar' buat segala sesuatu bergerak!</strong><br><br>
                        <strong>Energi Kinetik (Ek):</strong><br>
                        Energi yang dimiliki benda karena bergerak<br>
                        Rumus: Ek = ½mv²<br><br>
                        <strong>Energi Potensial (Ep):</strong><br>
                        Energi yang dimiliki benda karena posisinya<br>
                        Rumus: Ep = mgh<br><br>
                        <strong>Usaha (W):</strong><br>
                        Energi yang diperlukan untuk memindahkan benda<br>
                        Rumus: W = F × s × cos θ<br><br>
                        <strong>Hukum Kekekalan Energi:</strong><br>
                        Energi ga bisa diciptakan atau dimusnahkan, cuma bisa diubah bentuknya!
                    `,
                    example: `
                        <strong>Contoh Soal:</strong><br>
                        Sebuah bola bermassa 2 kg jatuh dari ketinggian 5 m. Berapa energi kinetik bola saat menyentuh tanah? (g = 10 m/s²)<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Pakai hukum kekekalan energi:<br>
                        Ep awal = Ek akhir<br>
                        mgh = ½mv²<br>
                        2 × 10 × 5 = ½ × 2 × v²<br>
                        100 = v²<br>
                        v = 10 m/s<br><br>
                        Ek = ½mv² = ½ × 2 × 10² = 100 J
                    `,
                    exercise: {
                        question: "Sebuah mobil bermassa 1000 kg bergerak dengan kecepatan 20 m/s. Berapa energi kinetik mobil tersebut?",
                        answer: 200000,
                        tolerance: 10000,
                        unit: "J"
                    }
                },

                momentum: {
                    title: "🎯 Momentum dan Impuls",
                    formula: "p = m × v | I = F × Δt | I = Δp",
                    explanation: `
                        <strong>Momentum tuh kayak 'daya dobrak' suatu benda!</strong><br><br>
                        <strong>Momentum (p):</strong><br>
                        p = m × v<br>
                        Makin berat dan makin cepat, makin besar momentumnya<br><br>
                        <strong>Impuls (I):</strong><br>
                        I = F × Δt = Δp<br>
                        Impuls = perubahan momentum<br><br>
                        <strong>Hukum Kekekalan Momentum:</strong><br>
                        Dalam sistem tertutup, momentum total sebelum = momentum total sesudah<br>
                        m₁v₁ + m₂v₂ = m₁v₁' + m₂v₂'
                    `,
                    example: `
                        <strong>Contoh Soal Tumbukan:</strong><br>
                        Bola A (2 kg) bergerak 4 m/s menumbuk bola B (3 kg) yang diam. Setelah tumbukan, bola A bergerak 1 m/s. Berapa kecepatan bola B?<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Momentum sebelum = Momentum sesudah<br>
                        m₁v₁ + m₂v₂ = m₁v₁' + m₂v₂'<br>
                        2(4) + 3(0) = 2(1) + 3(v₂')<br>
                        8 = 2 + 3v₂'<br>
                        v₂' = 2 m/s
                    `,
                    exercise: {
                        question: "Sebuah benda bermassa 5 kg bergerak dengan kecepatan 6 m/s. Berapa momentum benda tersebut?",
                        answer: 30,
                        tolerance: 1,
                        unit: "kg⋅m/s"
                    }
                },

                kinematika: {
                    title: "🏎️ Kecepatan dan Percepatan",
                    formula: "v̄ = Δs/Δt | v = ds/dt | a = dv/dt | v² = v₀² + 2as",
                    explanation: `
                        <strong>Kinematika tuh ilmu yang bahas gerakan tanpa peduli penyebabnya!</strong><br><br>
                        <strong>Laju vs Kecepatan:</strong><br>
                        • Laju = jarak total ÷ waktu (selalu positif)<br>
                        • Kecepatan = perpindahan ÷ waktu (bisa negatif)<br><br>
                        <strong>Kecepatan Rata-rata:</strong><br>
                        v̄ = Δs/Δt = (s₂ - s₁)/(t₂ - t₁)<br><br>
                        <strong>Kecepatan Sesaat:</strong><br>
                        v = ds/dt (kecepatan pada saat tertentu)<br><br>
                        <strong>Percepatan:</strong><br>
                        a = Δv/Δt = dv/dt<br><br>
                        <strong>Gerak Vertikal (jatuh bebas):</strong><br>
                        • v = v₀ + gt<br>
                        • h = v₀t + ½gt²<br>
                        • v² = v₀² + 2gh
                    `,
                    example: `
                        <strong>Contoh Soal Gerak Vertikal:</strong><br>
                        Sebuah bola dilempar vertikal ke atas dengan kecepatan awal 30 m/s. Berapa tinggi maksimum dan waktu untuk mencapainya? (g = 10 m/s²)<br><br>
                        <strong>Penyelesaian:</strong><br>
                        Di titik tertinggi: v = 0<br>
                        v = v₀ - gt<br>
                        0 = 30 - 10t<br>
                        t = 3 s<br><br>
                        h = v₀t - ½gt²<br>
                        h = 30(3) - ½(10)(3)²<br>
                        h = 90 - 45 = 45 m<br><br>
                        Atau pakai: h = v₀²/(2g) = 30²/(2×10) = 45 m
                    `,
                    exercise: {
                        question: "Sebuah mobil bergerak dari kecepatan 20 m/s menjadi 50 m/s dalam waktu 6 detik. Berapa percepatan mobil tersebut?",
                        answer: 5,
                        tolerance: 0.5,
                        unit: "m/s²"
                    }
                }
            };

            function showTopic(topicId) {
                const topic = topics[topicId];
                const content = `
                    <h2>${topic.title}</h2>
                    
                    <div class="formula-box">
                        ${topic.formula}
                    </div>
                    
                    <div class="explanation">
                        <h3>💡 Penjelasan</h3>
                        ${topic.explanation}
                    </div>
                    
                    <div class="example-box">
                        <h3>📝 ${topic.example}</h3>
                    </div>
                    
                    <div class="exercise-box">
                        <h3>🎯 Latihan Soal</h3>
                        <p><strong>${topic.exercise.question}</strong></p>
                        <br>
                        <input type="number" id="answerInput" class="answer-input" placeholder="Jawaban" step="0.01">
                        <span>${topic.exercise.unit}</span>
                        <br>
                        <button class="btn" onclick="checkAnswer('${topicId}')">Cek Jawaban</button>
                        <button class="btn" onclick="showHint('${topicId}')">Kasih Hint Dong!</button>
                        <div id="feedback"></div>
                    </div>
                `;
                
                document.getElementById('topicContent').innerHTML = content;
                document.getElementById('topicsSection').style.display = 'none';
                document.getElementById('contentArea').style.display = 'block';
                currentExercise = topic.exercise;
            }

            function showTopics() {
                document.getElementById('topicsSection').style.display = 'grid';
                document.getElementById('contentArea').style.display = 'none';
            }

            function checkAnswer(topicId) {
                const userAnswer = parseFloat(document.getElementById('answerInput').value);
                const correctAnswer = topics[topicId].exercise.answer;
                const tolerance = topics[topicId].exercise.tolerance;
                const feedback = document.getElementById('feedback');
                
                if (isNaN(userAnswer)) {
                    feedback.innerHTML = '<div class="feedback incorrect">Eh, isi dulu dong jawabannya! 😅</div>';
                    return;
                }
                
                if (Math.abs(userAnswer - correctAnswer) <= tolerance) {
                    feedback.innerHTML = `
                        <div class="feedback correct">
                            🎉 Mantap! Jawaban kamu benar! <br>
                            Jawaban yang tepat adalah ${correctAnswer} ${topics[topicId].exercise.unit}
                        </div>
                    `;
                } else {
                    feedback.innerHTML = `
                        <div class="feedback incorrect">
                            😔 Belum tepat nih. Jawaban yang benar adalah ${correctAnswer} ${topics[topicId].exercise.unit}<br>
                            Coba periksa lagi perhitungannya ya!
                        </div>
                    `;
                }
            }

            function showHint(topicId) {
                const hints = {
                    besaranSatuan: "Hint: Ubah dulu km ke m dan jam ke detik ya! 1 km = 1000 m, 1 jam = 3600 s",
                    gerakLurus: "Hint: Pakai rumus h = v₀²/(2g). Ingat, v akhir = 0 di titik tertinggi!",
                    gaya: "Hint: Pakai rumus F = m × a. Jangan lupa satuan ya!",
                    energi: "Hint: Pakai rumus Ek = ½mv². Hati-hati dengan pangkat 2 nya!",
                    momentum: "Hint: Pakai rumus p = m × v. Kalikan massa dengan kecepatan!",
                    kinematika: "Hint: Pakai rumus a = (v - v₀)/t. Percepatan = perubahan kecepatan ÷ waktu!"
                };
                
                document.getElementById('feedback').innerHTML = `
                    <div class="feedback" style="background: #fff3cd; color: #856404; border: 1px solid #ffeaa7;">
                        💡 ${hints[topicId]}
                    </div>
                `;
            }
        </script>
    </body>
    </html>