<!DOCTYPE html>
<html>
<body style="font-family:Arial; background:#f3f4f6; padding:20px;">

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center">

<table width="600" style="background:#ffffff; border-radius:10px; overflow:hidden;">

    <!-- HEADER -->
    <tr>
        <td style="background:#4B2E1F; padding:25px; text-align:center;">
            <h2 style="color:white; margin:0;">Widari Villa</h2>
        </td>
    </tr>

    <!-- CONTENT -->
    <tr>
        <td style="padding:30px; text-align:center;">

            <h3>Hello {{ $data['name'] }} 👋</h3>

            <p>Thank you for contacting us.</p>
            <p>We have received your message and will reply shortly.</p>

            <div style="margin-top:20px; background:#f9fafb; padding:15px; border-radius:6px;">
                <strong>Your Message:</strong>
                <p>{{ $data['message'] }}</p>
            </div>

            <a href="https://wa.me/6281215986658" style="display:inline-block; margin-top:20px; background:#4B2E1F; color:white; padding:12px 20px; text-decoration:none; border-radius:6px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="18" height="18" style="display:inline-block;">
                Contact Us on WhatsApp Admin
            </a>

        </td>
    </tr>

    <!-- FOOTER -->
    <tr>
        <td style="text-align:center; padding:15px; font-size:12px; color:#777;">
            © {{ date('Y') }} Widari Villa
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>