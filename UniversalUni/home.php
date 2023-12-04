<?php include("top.php");?>



<div id="search-for-class">

    <img id="grad-cap-img" src="grad_cap.png">

    <div id="choose-class-label">
        <label for="school-input">Enter your <b>school</b> to get started</label>
    </div>
    
    <input list="school_names" type="text" id="search-bar" placeholder="Your School...">
    
    <datalist id="school_names">
    <option value="Manhattan College" data-href="manhattan_college.php">
    <option value="Fordham University" data-href="fordham_university.php">
        
    </datalist>
    
    <script>
    
    <?php if (!isset($_SESSION['username'])): ?>
        document.getElementById('search-bar').addEventListener('input', function () {
            window.location.href = 'login.php';
        });
    <?php else: ?>
        
        document.getElementById('search-bar').addEventListener('input', function () {
            var selectedOption = document.querySelector('#school_names option[value="' + this.value + '"]');
            if (selectedOption) {
                window.location.href = selectedOption.getAttribute('data-href');
            }
        });
    <?php endif; ?>
</script>
    
    

</div>

<?php include("bottom.php");?>