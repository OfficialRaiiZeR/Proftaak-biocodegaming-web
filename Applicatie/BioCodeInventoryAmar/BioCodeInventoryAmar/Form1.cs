using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using MySql.Data.MySqlClient;
using System.Security.Cryptography;

namespace BioCodeInventoryAmar
{
    public partial class Form1 : Form
    {
        private const string DATABASE_HOST = "localhost";
        private const int DATABASE_PORT = 3307;
        private const string DATABASE_NAME = "biocode";
        private const string DATABASE_USERNAME = "root";
        private const string DATABASE_PASSWORD = "usbw";

        private readonly MySqlConnection connection;

        private Form2 profile;

        public Form1()
        {
            InitializeComponent();
            connection = createConnection();
        }

        private void btnLoginAmar_Click(object sender, EventArgs e)
        {
            string usernameAmar = txbUsernameAmar.Text;
            string passwordAmar = txbPasswordAmar.Text;

            if (usernameAmar.Length == 0)
            {
                MessageBox.Show("Enter a username!");
                return;
            }
            else if (passwordAmar.Length == 0)
            {
                MessageBox.Show("Enter a password!");
                return;
            }

            using (MySqlCommand command = new MySqlCommand("SELECT `userId` FROM `login` WHERE ((`userName` = @username) AND (`userPass` = SHA1(@password)))", connection))
            {
                command.Parameters.AddWithValue("@username", usernameAmar);
                command.Parameters.AddWithValue("@password", passwordAmar);

                using (MySqlDataReader reader = command.ExecuteReader())
                {
                    if (reader.Read())
                    {
                        MessageBox.Show("Success!");
                        profile = new Form2(reader.GetInt32("userId"), connection);
                        profile.Show();
                        this.Hide();
                    }
                    else
                    {
                        MessageBox.Show("Invalid Username or Password!");
                    }
                }
            }
        }

        private MySqlConnection createConnection()
        {
            MySqlConnection connection = new MySqlConnection(String.Format("server={0};port={1};database={2};uid={3};pwd={4};", DATABASE_HOST, DATABASE_PORT, DATABASE_NAME, DATABASE_USERNAME, DATABASE_PASSWORD));
            connection.Open();
            return connection;
        }
    }
}
