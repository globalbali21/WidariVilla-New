<!DOCTYPE html>
<html>
<body style="margin:0; padding:0; background:#f3f4f6; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px;">
        <tr>
            <td align="center">

                <table width="600" style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.1);">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#4B2E1F; text-align:center; padding:24px;">
                            <img src="https://widarivilla.com/images/logo/widarivilla.png" width="120" style="margin-bottom:10px;">
                            <h2 style="color:white; margin:0; font-size:24px;">
                                Widari Villa Booking
                            </h2>
                        </td>
                    </tr>

                    <!-- CONTENT -->
                    <tr>
                        <td style="padding:30px;">

                            <h3 style="margin-bottom:20px; color:#111827;">
                                New Booking Received
                            </h3>

                            <table width="100%" style="border-collapse:collapse;">
                                <tr>
                                    <td style="padding:10px; font-weight:bold;">Villas</td>
                                    <td style="padding:10px;">{{ $data['villa'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px; font-weight:bold;">Name</td>
                                    <td style="padding:10px;">{{ $data['name'] }}</td>
                                </tr>

                                <tr style="background:#f9fafb;">
                                    <td style="padding:10px; font-weight:bold;">Email</td>
                                    <td style="padding:10px;">{{ $data['email'] }}</td>
                                </tr>

                                <tr>
                                    <td style="padding:10px; font-weight:bold;">Phone</td>
                                    <td style="padding:10px;">{{ $data['phone'] }}</td>
                                </tr>

                                <tr style="background:#f9fafb;">
                                    <td style="padding:10px; font-weight:bold;">Check In</td>
                                    <td style="padding:10px;">{{ $data['check_in'] }}</td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- BUTTON (OPTIONAL) -->
                    <tr>
                        <td align="center" style="padding-bottom:30px;">
                            <a href="https://wa.me/{{ $data['phone'] }}"
                               style="background:#4B2E1F; color:white; padding:12px 25px; text-decoration:none; border-radius:6px; font-weight:bold;">
                                Contact Guest
                            </a>
                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="background:#f3f4f6; text-align:center; padding:15px; font-size:12px; color:#6b7280;">
                            © {{ date('Y') }} Widari Villa - Bali
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>