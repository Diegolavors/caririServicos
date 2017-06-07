<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    
    <body>

        

        <?php echo validation_errors(); ?> 

        <?php echo form_open('ControllerLogin/conferirLogin'); ?>


    <center> 
            <h1>Login</h1>
            <input type="text" name="Usuario" placeholder="Usuário" required><br><br>
            <input type="password" name="Senha" placeholder="Senha" required><br><br>
            <input type="submit" value="Login" name="Salvar" ><br>
        
    </center>
    </form>

</body>
</html>
