<!DOCTYPE html>
<html>
<body style="font-family:Arial; background:#f3f4f6; padding:20px;">

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center">

<table width="600" style="background:#ffffff; border-radius:10px; overflow:hidden;">

    <!-- HEADER -->
    <tr>
        <td style="background:#5b2d1a; padding:20px; text-align:center;">
            <h2 style="color:white; margin:0;">New Contact Message</h2>
        </td>
    </tr>

    <!-- CONTENT -->
    <tr>
        <td style="padding:30px;">

            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> +{{ $data['phone'] }}</p>
            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

            <hr style="margin:20px 0;">

            <p><strong>Message:</strong></p>
            <p style="background:#f9fafb; padding:15px; border-radius:6px;">
                {{ $data['message'] }}
            </p>

        </td>
    </tr>
    <tr>
        <td style="text-align:center; padding-bottom:30px;">
    
            <a href="https://wa.me/{{ $data['phone'] }}"
               style="display:inline-block; background:#5b2d1a; color:white; padding:12px 25px; text-decoration:none; border-radius:6px; font-weight:bold;">
                Contact User via WhatsApp
            </a>
    
        </td>
    </tr>
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