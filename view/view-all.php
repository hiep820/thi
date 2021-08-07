<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Ramayana - Free Bootstrap 4 CSS Template</title>


  </head>

<body class="is-preload">

   
              <h1>Thoong tin user </h1>
                <table  border="1" cellspacing="0" > 
                    <tr>
                        <th>mã</th>
                        <th>ảnh</th>
                        <th>tên </th>
                        <th>giới tính</th>
                        <th>số điện thoại</th>
                        <th>email</th>
                    </tr> 
                    <?php foreach ($result as $user): ?>
                    <tr>
                        <td><?= $user->id?></td>
                        <td><?= $user->image?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->gender?></td>
                        <td><?= $user->phone?></td>
                        <td><?= $user->email?></td>
                    </tr>
                    <?php endforeach ?>    
                </table>
  </body>

</html>