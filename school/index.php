<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="layout">
    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <span class="menu-icon">☰</span>
            <span class="bell-icon">🔔</span>
        </div>
        <nav>
            <button class="active" onclick="showPage('dashboard', this)">Dashboard</button>
            <button onclick="showPage('announcement', this)">Announcement</button>
            <button onclick="showPage('assignment', this)">Assignment</button>
            <button onclick="showPage('materials', this)">Materials</button>
            <button onclick="showPage('calendar', this)">Calendar</button>
            <button onclick="showPage('profile', this)">Profile</button>
            <button onclick="location.href='logout.php'">Logout</button>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main">
        <div class="topbar">
            <input type="text" placeholder="Search..." class="search-bar">
            <div class="topbar-right">
                <img src="https://i.pravatar.cc/40" alt="Avatar" class="avatar">
            </div>
        </div>

        <div class="content-area">

            <!-- DASHBOARD SECTION -->
            <section id="dashboard" class="page">
                <h1>WELCOME BACK</h1>
                <p class="subtitle">Here’s what’s happening today</p>
                <div class="stats-cards">
                    <div class="stat-card" onclick="showPage('assignment')">
                        <div class="stat-icon green">📄</div>
                        <div class="stat-info"><h3>6</h3><span>ASSIGNMENTS</span></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon yellow">📅</div>
                        <div class="stat-info"><h3>5</h3><span>EVENTS</span></div>
                    </div>
                    <div class="stat-card" onclick="showPage('announcement')">
                        <div class="stat-icon purple">📢</div>
                        <div class="stat-info"><h3>8</h3><span>ANNOUNCEMENTS</span></div>
                    </div>
                </div>

                <h2 class="section-title">Recent announcement</h2>
                <div class="item-card announcement-item">
                    <div class="stripe green-bg"></div>
                    <div class="item-body">
                        <strong>Midterm Examination Schedule</strong>
                        <small>May 13, 2026</small>
                        <p>The official schedule for Midterm Exams is now posted. Please check your portals.</p>
                    </div>
                </div>
            </section>

            <!-- ANNOUNCEMENT PAGE (COMPLETE 5 ITEMS) -->
            <section id="announcement" class="page" style="display:none;">
                <h2 class="page-title">ANNOUNCEMENTS & EVENTS</h2>
                <div class="item-card announcement-item">
                    <div class="stripe yellow-bg"></div>
                    <div class="item-body">
                        <strong>🎉 Grand Institutional Parade</strong>
                        <small>May 20, 2026 | 7:00 AM</small>
                        <p>Assembly starts at the main gate. Wear your official department shirts!</p>
                    </div>
                </div>
                <div class="item-card announcement-item">
                    <div class="stripe red-bg"></div>
                    <div class="item-body">
                        <strong>🏆 Intramurals 2026: Opening Ceremony</strong>
                        <small>May 22, 2026</small>
                        <p>Join us for the lighting of the torch at the sports complex.</p>
                    </div>
                </div>
                <div class="item-card announcement-item">
                    <div class="stripe purple-bg"></div>
                    <div class="item-body">
                        <strong>🗳️ Student Council Elections</strong>
                        <small>May 25, 2026</small>
                        <p>Exercise your right to vote! Online voting will be open from 8:00 AM to 5:00 PM.</p>
                    </div>
                </div>
                <div class="item-card announcement-item">
                    <div class="stripe green-bg"></div>
                    <div class="item-body">
                        <strong>🌿 Campus Clean-up Drive</strong>
                        <small>May 28, 2026</small>
                        <p>Volunteers are needed for our monthly environmental drive.</p>
                    </div>
                </div>
                <div class="item-card announcement-item">
                    <div class="stripe blue-bg"></div>
                    <div class="item-body">
                        <strong>💻 Web Design Workshop</strong>
                        <small>June 02, 2026</small>
                        <p>A free workshop on UI/UX trends for graduating IT students.</p>
                    </div>
                </div>
            </section>

            <!-- ASSIGNMENT PAGE (COMPLETE 6 ITEMS) -->
            <section id="assignment" class="page" style="display:none;">
                <h2 class="page-title">MY ASSIGNMENTS</h2>
                <div class="item-card assignment-item">
                    <div class="icon-circle">📄</div>
                    <div class="item-body">
                        <h3>Web Development Activity</h3>
                        <p>Create a responsive student dashboard gamit ang HTML at CSS.</p>
                        <small>Due: May 15, 2026 • <span class="status pending">Pending</span></small>
                    </div>
                </div>
                <div class="item-card assignment-item">
                    <div class="icon-circle">💻</div>
                    <div class="item-body">
                        <h3>PHP Database Integration</h3>
                        <p>Connect your login and registration forms to a MySQL database.</p>
                        <small>Due: May 18, 2026 • <span class="status ongoing">Ongoing</span></small>
                    </div>
                </div>
                <div class="item-card assignment-item">
                    <div class="icon-circle">📊</div>
                    <div class="item-body">
                        <h3>Data Structures Report</h3>
                        <p>Submit a documentation about Linked Lists and Binary Trees.</p>
                        <small>Due: May 20, 2026 • <span class="status pending">Pending</span></small>
                    </div>
                </div>
                <div class="item-card assignment-item">
                    <div class="icon-circle">🎨</div>
                    <div class="item-body">
                        <h3>UI/UX Design Mockup</h3>
                        <p>Design a mobile app interface using Figma or Adobe XD.</p>
                        <small>Due: May 22, 2026 • <span class="status ongoing">Ongoing</span></small>
                    </div>
                </div>
                <div class="item-card assignment-item">
                    <div class="icon-circle">📝</div>
                    <div class="item-body">
                        <h3>Ethics in Computing Essay</h3>
                        <p>Write a 500-word essay about the impact of AI on modern society.</p>
                        <small>Due: May 25, 2026 • <span class="status pending">Pending</span></small>
                    </div>
                </div>
                <div class="item-card assignment-item">
                    <div class="icon-circle">🔍</div>
                    <div class="item-body">
                        <h3>System Analysis Case Study</h3>
                        <p>Analyze the current library system and propose improvements.</p>
                        <small>Due: May 30, 2026 • <span class="status pending">Pending</span></small>
                    </div>
                </div>
            </section>

            <!-- MATERIALS PAGE (COMPLETE 4 ITEMS) -->
            <section id="materials" class="page" style="display:none;">
                <h2 class="page-title">LEARNING MATERIALS</h2>
                <div class="materials-list">
                    <div class="item-card material-item">
                        <div class="file-tag word">DOCX</div>
                        <div class="item-body">
                            <strong>Handouts_Chapter1.docx</strong>
                            <small>1.2 MB • Word Document</small>
                        </div>
                        <button class="btn-download">Download</button>
                    </div>
                    <div class="item-card material-item">
                        <div class="file-tag pdf">PDF</div>
                        <div class="item-body">
                            <strong>Web_Security_Guide.pdf</strong>
                            <small>3.5 MB • PDF Document</small>
                        </div>
                        <button class="btn-download">Download</button>
                    </div>
                    <div class="item-card material-item">
                        <div class="file-tag ppt">PPTX</div>
                        <div class="item-body">
                            <strong>Introduction_to_PHP.pptx</strong>
                            <small>5.1 MB • Presentation</small>
                        </div>
                        <button class="btn-download">Download</button>
                    </div>
                    <div class="item-card material-item">
                        <div class="file-tag zip">ZIP</div>
                        <div class="item-body">
                            <strong>Dashboard_Templates.zip</strong>
                            <small>12.8 MB • Compressed File</small>
                        </div>
                        <button class="btn-download">Download</button>
                    </div>
                </div>
            </section>

            <!-- CALENDAR PAGE -->
            <section id="calendar" class="page" style="display:none;">
                <h2 class="page-title">CALENDAR</h2>
                <div class="calendar-container">
                    <div class="calendar-nav">
                        <button onclick="prevMonth()">◀</button>
                        <h3 id="monthYearDisplay"></h3>
                        <button onclick="nextMonth()">▶</button>
                    </div>
                    <table class="calendar-table">
                        <thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead>
                        <tbody id="calendarGrid"></tbody>
                    </table>
                </div>
            </section>

            <!-- PROFILE PAGE -->
            <section id="profile" class="page" style="display:none;">
                <div class="profile-box">
                    <img src="https://i.pravatar.cc/150" alt="User">
                    <h2><?php echo $_SESSION['user']; ?></h2>
                    <p>Student ID: 2026-0001</p>
                    <button class="btn-logout" onclick="location.href='logout.php'">Sign Out Account</button>
                </div>
            </section>

        </div>
    </main>
</div>

<script>
    function showPage(pageId, btn) {
        document.querySelectorAll('.page').forEach(p => p.style.display = 'none');
        document.getElementById(pageId).style.display = 'block';
        document.querySelectorAll('.sidebar button').forEach(b => b.classList.remove('active'));
        if(btn) btn.classList.add('active');
    }

    let currentDT = new Date();
    function renderCal() {
        const display = document.getElementById("monthYearDisplay");
        const grid = document.getElementById("calendarGrid");
        const mNames = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        display.innerText = `${mNames[currentDT.getMonth()]} ${currentDT.getFullYear()}`;
        grid.innerHTML = "";
        let first = new Date(currentDT.getFullYear(), currentDT.getMonth(), 1).getDay();
        let last = new Date(currentDT.getFullYear(), currentDT.getMonth() + 1, 0).getDate();
        let d = 1;
        for (let i = 0; i < 6; i++) {
            let row = document.createElement("tr");
            let hasD = false;
            for (let j = 0; j < 7; j++) {
                let cell = document.createElement("td");
                if (i === 0 && j < first) cell.innerText = "";
                else if (d > last) cell.innerText = "";
                else {
                    cell.innerText = d;
                    if(d === new Date().getDate() && currentDT.getMonth() === new Date().getMonth()) cell.classList.add("today");
                    d++; hasD = true;
                }
                row.appendChild(cell);
            }
            if(hasD) grid.appendChild(row);
        }
    }
    function prevMonth() { currentDT.setMonth(currentDT.getMonth() - 1); renderCal(); }
    function nextMonth() { currentDT.setMonth(currentDT.getMonth() + 1); renderCal(); }
    window.onload = renderCal;
</script>
</body>
</html>