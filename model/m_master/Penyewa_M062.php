<?php
class Penyewa_M062 extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("SELECT user_plg062, Sandi062, Nik062, nm_lngkp062, no_hp062, almt_lngkp062,  
        ft_ktp, ft_sim_a FROM penyewa");
        $dtpenyewa->execute();
        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function cekpenyewa($user_plg062)
{
    $sql = $this->db->prepare("SELECT user_plg062 FROM penyewa WHERE user_plg062 = ? ");
    $sql->bind_param("s", $user_plg062);
    $sql->execute();
    $hasil = $sql->get_result();
    return $hasil->num_rows > 0;
}

public function simpan($data)
{
    $sql = $this->db->prepare("INSERT INTO penyewa (user_plg062,Sandi062,Nik062,nm_lngkp062,
    no_hp062,almt_lngkp062,ft_ktp,ft_sim_a) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssssssss", $data['user_plg062'], $data['Sandi062'], $data['Nik062'], 
    $data['nm_lngkp062'], $data['no_hp062'], $data['almt_lngkp062'], $data['ft_ktp'], 
    $data['ft_sim_a']);
    return $sql->execute();
}

public function detailpenyewa($user_plg062)
{
    $sql = $this->db->prepare(
        "SELECT user_plg062, Sandi062, Nik062, nm_lngkp062, no_hp062,
            almt_lngkp062, ft_ktp, ft_sim_a
        FROM penyewa
        WHERE user_plg062 = ?"
    );

    $sql->bind_param("s", $user_plg062);
    $sql->execute();

    return $sql->get_result()->fetch_assoc();
}
public function UbahDtPenyewa($data)
{
    $sql = $this->db->prepare(
        "UPDATE penyewa SET Sandi062 = ?, Nik062 = ?, nm_lngkp062 = ?, no_hp062 = ?, 
        almt_lngkp062 = ?, ft_ktp = ?, ft_sim_a = ? WHERE user_plg062 = ?"
    );

    $sql->bind_param(
        "ssssssss",
        $data['Sandi062'],
        $data['Nik062'],
        $data['nm_lngkp062'],
        $data['no_hp062'],
        $data['almt_lngkp062'],
        $data['ft_ktp'],
        $data['ft_sim_a'],
        $data['user_plg062']
    );

    return $sql->execute();
}
public function HapusDtpenyewa($user_plg062)
{
    $dtpenyewa = $this->db->prepare("DELETE FROM penyewa WHERE user_plg062 = ?");
    $dtpenyewa->bind_param("s", $user_plg062);
    $hasil = $dtpenyewa->execute();
    $dtpenyewa->close();
    return $hasil;
}
}