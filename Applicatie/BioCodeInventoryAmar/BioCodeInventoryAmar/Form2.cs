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
    public partial class Form2 : Form
    {
        private readonly int user;
        private readonly MySqlConnection connection;

        public Form2(int user, MySqlConnection connection)
        {
            InitializeComponent();

            this.user = user;
            this.connection = connection;
        }

        private void btnSendAmar_Click(object sender, EventArgs e)
        {
            try
            {
                string query = "SELECT `items`.`name`, `items`.`description`, `items`.`cost` FROM `inventories` INNER JOIN `items` ON `items`.`id` = `inventories`.`item_id` WHERE `inventories`.`user_id` = " + user + ";";

                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    using (MySqlDataReader reader = command.ExecuteReader())
                    {
                        while (reader.Read())
                        {
                            lbxItems.Items.Add(reader["name"]);
                        }
                    }
                }
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
                throw;
            }

            Console.WriteLine("Done.");
        }
    }
}
