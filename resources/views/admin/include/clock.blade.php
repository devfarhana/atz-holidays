<div class="digital-clock float-end">
    <div class="clock-container">
        <span class="clock-text"><i class="fa fa-clock"></i><span id="clock"></span></span>
        <span class="clock-text"><i class="fa fa-calendar"></i><span id="date"></span></span>
    </div>
</div>

<script>
    function updateWatch() {
        const now = new Date();

        // Format date with day name
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = now.toLocaleDateString(undefined, options);

        // Format time (12-hour format with AM/PM)
        let hours = now.getHours();
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? String(hours).padStart(2, '0') : '12'; // The hour '0' should be '12'
        const formattedTime = `${hours}:${minutes}:${seconds} ${ampm}`;

        // Update the date and clock
        document.getElementById('date').innerText = formattedDate;
        document.getElementById('clock').innerText = formattedTime;
    }
    setInterval(updateWatch, 1000);
    updateWatch();
</script>
<style>
    .digital-clock {
    display: flex;
    align-items: center;
    padding: 8px 16px;
    background: #ffffff00; /* Light background color for a clean look */
    border-radius: 8px;
    color: #333; /* Dark text for readability */
    font-family: 'Arial', sans-serif;
    font-size: 16px; /* Slight shadow for depth */
}

.clock-container {
    display: flex;
    align-items: center;
    gap: 15px;
}

.clock-text {
    display: flex;
    align-items: center;
    font-size: 14px; /* Smaller font size */
}

.clock-text i {
    margin-right: 6px;
    font-size: 18px; /* Icon size adjustment */
    color: #f57b20; /* Green color for icons */
}

#clock {
    font-size: 20px; /* Time size */
    font-weight: 700;
    color: #ffffff; /* Green for time */
    letter-spacing: 1px;
}

#date {
    font-size: 14px; /* Date size */
    color: #777; /* Light grey for the date */
    font-weight: 300;
}

@media (max-width: 768px) {
    .digital-clock {
        flex-direction: column;
        align-items: flex-start;
    }

    .clock-container {
        flex-direction: column;
        gap: 10px;
    }

    .clock-text {
        font-size: 12px; /* Adjust font for smaller screens */
    }

    #clock {
        font-size: 18px; /* Adjust time size for smaller screens */
    }

    #date {
        font-size: 12px; /* Adjust date size for smaller screens */
    }
}

</style>
