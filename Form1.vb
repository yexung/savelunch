
Option Infer On
Imports System.Net
Imports System.Text
Imports System.IO
Imports System.IO.Ports
Public Class Form1
    Dim a As Integer
    Dim b As Integer
    Private WithEvents SerialPort1 As New System.IO.Ports.SerialPort
    Dim myport As Array
    Dim datarecv As String
    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        myport = IO.Ports.SerialPort.GetPortNames()
        For i = 0 To UBound(myport)
            ComboBox1.Items.Add(myport(i))
        Next
        ComboBox1.Text = ComboBox1.Items.Item(0)
        Button2.Enabled = False
    End Sub
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        SerialPort1.PortName = ComboBox1.Text
        SerialPort1.BaudRate = 9600
        SerialPort1.Parity = IO.Ports.Parity.None
        SerialPort1.StopBits = IO.Ports.StopBits.One
        SerialPort1.DataBits = 8
        SerialPort1.Open()
        ComboBox1.Enabled = False
        Button1.Enabled = False
        Button2.Enabled = True
    End Sub
    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click '★접속해제
        SerialPort1.Close()
        ComboBox1.Enabled = True
        Button1.Enabled = True
        Button2.Enabled = False
    End Sub
    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click '★데이터전송
        SerialPort1.Write(TextBox1.Text)
    End Sub
    Private Sub SerialPort1_DataReceived(ByVal sender As Object, ByVal e As System.IO.Ports.SerialDataReceivedEventArgs) Handles SerialPort1.DataReceived '★데이터수신
        datarecv = SerialPort1.ReadExisting()
    End Sub
    Private Sub Timer1_Tick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Timer1.Tick '★데이터출력
        TextBox1_recv.Text = datarecv
    End Sub

    Private Sub Timer2_Tick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Timer2.Tick
        Dim cweb As String = "http://xxpodo.com/test.php"
        Dim POST_data As String = "&sensor1=1&sensor3=0&sensor4=0&sensor2=" & TextBox1_recv.Text
        ' Dim POST_data2 As String = "&sensor2=" & 
        Dim request As HttpWebRequest
        Dim response As HttpWebResponse

        'UTF8방식'문자열셋
        Dim postBytes As Byte() = Encoding.ASCII.GetBytes(POST_data) '아스키방식

        request = CType(WebRequest.Create(cweb), HttpWebRequest)
        request.UserAgent = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.72 Safari/537.36"
        request.AllowAutoRedirect = True
        request.ContentType = "application/x-www-form-urlencoded; charset=UTF-8;" '문자열셋
        request.ContentLength = postBytes.Length
        request.Method = "POST"
        request.KeepAlive = True

        Dim requestStream As Stream = request.GetRequestStream()

        requestStream.Write(postBytes, 0, postBytes.Length)
        requestStream.Close()

        response = CType(request.GetResponse(), HttpWebResponse)
        response.Close()
        Timer2.Enabled = False
    End Sub

    Private Sub Button4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button4.Click
        Timer2.Enabled = True
    End Sub
End Class
