<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxs-news bx-tada'></i>
        <span class="logo_name">Admin Page</span>
    </div>
    <ul class="nav-links">
        <li><a href="#" class="active"><i class='bx bx-grid-alt'></i><span class="links_name">Dashboard</span></a></li>
        <li><a href="#"><i class='bx bx-pie-chart-alt-2'></i><span class="links_name">Statistics</span></a></li>
        <li><a href="add_articles_form.php"><i class='bx bx-book-add'></i><span class="links_name">Add Article</span></a></li>
        <li><a href="#"><i class='bx bx-user'></i><span class="links_name">Profile</span></a></li>
        <li><a href="#"><i class='bx bx-cog'></i><span class="links_name">Setting</span></a></li>
        <li class="log_out"><a href="#"><i class='bx bx-log-out'></i><span class="links_name">Log out</span></a></li>
    </ul>
</div>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
        <img src="admin.jpg" alt="">
        <span class="admin_name">admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    
    <div class="container mt-5">
        <h1>Add New Article</h1>
        <form class="row g-3" action="add_article.php" method="POST">
            <div class="col-12" style="padding: 20px 20px 10px">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            </div>
            <div class="col-12" style="padding: 10px 20px 10px">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control autogrow" placeholder="Write your content here" id="content" name="content" oninput="autoResize(this)" required></textarea>
            </div>
            <div class="col-md-4" style="padding: 10px 20px 10px">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select" name="category" required>
                    <option value="">Choose Category</option>
                    <option value="Politics">Politics</option>
                    <option value="Local News">Local News</option>
                    <option value="World">World</option>
                    <option value="Business">Business</option>
                    <option value="Sports">Sports</option>
                    <option value="Health">Health</option>
                    <option value="Editorial">Editorial</option>
                </select>
            </div>
            <div class="col-12" style="padding: 10px 20px 10px">
                <div class="row">
                    <div class="col" style="padding: 10px 20px 10px">
                        <label for="author_first_name" class="form-label">Author's First Name</label>
                        <input type="text" class="form-control" id="author_first_name" name="author_first_name" required>
                    </div>
                    <div class="col" style="padding: 10px 20px 0px 10px">
                        <label for="author_last_name" class="form-label">Author's Last Name</label>
                        <input type="text" class="form-control" id="author_last_name" name="author_last_name" required>
                    </div>
                </div>
            </div>
            <div class="col-12" style="padding: 10px 20px 10px">
                <label for="thumbnail" class="form-label">Insert Thumbnail URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="thumbnail" name="thumbnail" aria-describedby="basic-addon3" required>
                </div>
            </div>
            <div class="col-12" style="padding: 10px 20px 10px">
                <button type="submit" class="btn btn-primary">Add Article</button>
            </div>
        </form>
    </div>
</section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }
</script>

</body>
</html>

 </script>

</body>
</html>
