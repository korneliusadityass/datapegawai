<p align="center" class="style4">Form Untuk Menambah Data Pegawai</p>

<form id="butamu" name="butamu" method="post" action="">
    <table width="600" border="0" align="center" cellpadding="8px">
        <tr>
            <td valign="middle" bgcolor="#99CCFF">
                <div align="left" class="style3">Nama </div>
            </td>
            <td>:</td>
            <td bgcolor="#9999FF"><input type="text" name="nama" id="nama" size="45" required="" /></td>
        </tr>
        <tr>
            <td valign="middle" bgcolor="#99CCFF">
                <div align="left" class="style3">Jabatan</div>
            </td>
            <td>:</td>
            <td bgcolor="#9999FF"><input type="text" name="jabatan" id="jabatan" size="45" required="" /></td>
        </tr>
        <tr>
            <td valign="middle" bgcolor="#99CCFF">
                <div align="left" class="style3">Status </div>
            </td>
            <td>:</td>
            <td bgcolor="#9999FF"><input type="text" name="statuspegawai" id="statuspegawai" size="45" required="" /></td>
        </tr>
        <tr>
            <td valign="middle"><span class="style4"></span></td>
            <td></td>
            <td><input type="submit" name="submit" value="Kirim" id="kirim" />
                <input type="reset" name="batal" id="batal" value="Batal" />
                <input type="reset" class="btn btn-submit" value="Kembali" onclick="self.history.back();">
            </td>
        </tr>
    </table>
    <br>


</form>